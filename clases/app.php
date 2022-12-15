<?php
//incluimos la clase PHPMailer
require_once( __DIR__ . '/../vendor/autoload.php' );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

  class App 
  {

    public function getLinkPayMercadoPago($price, $image)
    {

      try {

        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(ACCESS_TOKEN);
        
        # Crear un objeto preferencia
        $preference = new MercadoPago\Preference();
        # Crea ítems en la preferencia
        $item = new MercadoPago\Item;
        $item->title = "Donación a Fundación Sonrie la Vida";
        $item->quantity = 1;
        $item->picture_url = $image;
        $item->unit_price = $price;

        $preference->items = array($item);

        $dateFrom = date(DATE_W3C);
        $dateTo = date(DATE_W3C,strtotime($dateFrom."+ 1 hour"));

        $preference->expires = true;
        $preference->expiration_date_from = $dateFrom;
        $preference->expiration_date_to = $dateTo;

        $preference->back_urls = array(
          "success" => REDIRECT_SUCCESS,
          "failure" => REDIRECT_PENDING,
          "pending" => REDIRECT_FAILURE
        );

        $preference->auto_return = "approved";

        # Guardar y postear la preferencia
        $order = $preference->save();

        if ($order) {

          $order_data = [
            "link_pay" => $preference->init_point,
          ];

          return $order_data;
        }
        
       } catch (Exception $e) {

        header("HTTP/1.1 500 Internal Server Error"); 
             
      }

    }

    public function getLinkPayMercadoPagoForCampaignFielCompaniero($price, $product, $user)
    {

      try {

        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(ACCESS_TOKEN);
        
        # Crear un objeto preferencia
        $preference = new MercadoPago\Preference();


        # Crea el payer en la preferencia
        $payer = new MercadoPago\Payer();
        $payer->name = $user->name;
        $payer->email = $user->email;
        $payer->identification = array(
          "type" => "DNI",
          "number" => $user->dni);
        $payer->phone = array(
          "area_code" => "-",
          "number" => $user->phone);
        $preference->payer = $payer;

        # Crea ítems en la preferencia
        $item = new MercadoPago\Item;
        $item->id = $product->id;
        $item->title = $product->sku;
        $item->description = $product->description;
        $item->category_id = $product->category;
        $item->quantity = 1;
        $item->picture_url = BASE . 'img/campaigns/fiel-companero/' .  strtolower($product->category) . '/' .  $product->image;
        $item->unit_price = $price;

        $preference->items = array($item);

        $dateFrom = date(DATE_W3C);
        $dateTo = date(DATE_W3C,strtotime($dateFrom."+ 1 hour"));

        $preference->expires = true;
        $preference->expiration_date_from = $dateFrom;
        $preference->expiration_date_to = $dateTo;

        $preference->back_urls = array(
          "success" => REDIRECT_SUCCESS_CAMPAIGN_FIEL,
          "failure" => REDIRECT_PENDING_CAMPAIGN_FIEL,
          "pending" => REDIRECT_FAILURE_CAMPAIGN_FIEL
        );

        $preference->auto_return = "approved";

        # Guardar y postear la preferencia
        $order = $preference->save();

        if ($order) {

          $order_data = [
            "link_pay" => $preference->init_point,
          ];

          return $order_data;
        }
        
       } catch (Exception $e) {

        header("HTTP/1.1 500 Internal Server Error"); 
             
      }

    }

    public function sendEmail($destinatario, $template, $post, $product = NULL, $payments = NULL)
    {

      $mail = new PHPMailer();

      switch ($destinatario) {
        
        case 'Cliente':

          //ENVIOS
          $mail->setFrom($post['email'], $post['name']);
          $mail->addAddress(EMAIL_CLIENT, NAME_CLIENT);     //Add a recipient
          $mail->addReplyTo($post['email'], $post['name']);
          break;
        
        case 'Usuario':

          //ENVIOS
          $mail->setFrom(EMAIL_CLIENT, NAME_CLIENT);
          $mail->addAddress($post['email'], $post['name']);     //Add a recipient
          $mail->addReplyTo(EMAIL_CLIENT, NAME_CLIENT);
          break;

      }

      switch ($template) {

        case 'Contacto Cliente':
          $template_email = $this->selectEmailTemplate($post, 'to_client');
          $subject = 'Nueva consulta desde el ' . $post['origin'];
          break;
        
        case 'Contacto Usuario':
          $template_email = $this->selectEmailTemplate($post, 'to_user');
          $subject = 'Gracias por tu contacto.';
          break;

        case 'Campania Fiel Companiero Cliente':
          $template_email = $this->selectEmailTemplate($post, 'to_client_campaign_fiel', $product, $payments);
          $subject = 'Recibiste un pago por la campaña Fiel Compañero.';
          break;

        case 'Campania Fiel Companiero Usuario':
          $template_email = $this->selectEmailTemplate($post, 'to_user_campaign_fiel', $product, $payments);
          $subject = 'Gracias por tu donación.';
          break;
        
      }

      if (ENVIRONMENT === 'local') {
        $mail->isSendmail();
      } else {
        $mail->isSMTP();
      }

      //SERVER SETTINGS
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
      $mail->Host       = SMTP;                     
      $mail->SMTPAuth   = true;                                   
      $mail->Username   = EMAIL_CLIENT;                    
      $mail->Password   = PASSWORD;                              
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->CharSet = EMAIL_CHARSET;
      $mail->Port       = EMAIL_PORT;                                    //TCP port to connect to; use 587 if you have set 

      //CONTENIDO
      $mail->isHTML(true);                                  
      $mail->Subject = $subject;
      $mail->Body    = $template_email;

      //send the message, check for errors
      $send = $mail->send();

      return $send;

    }

    public function setVariablesToEmail($post, $to, $product = NULL, $payments = NULL)
    {

      if ( count($payments) > 1 ) { // si se abono con dos medios de pago
        
        foreach ($payments as $key => $payment) {
          $payment_id[$key] = $payment->id;
          $payment_status[$key] = $payment->status;
          $payment_type_id[$key] = $payment->payment_type_id;
          $payment_transaction_amount[$key] = $payment->transaction_amount;
        }

      } else { // Si se abono con un medio de pago
        $payment_id[0] = $payments[0]->id;
        $payment_status[0] = $payments[0]->status;
        $payment_type_id[0] = $payments[0]->payment_type_id;
        $payment_transaction_amount[0] = $payments[0]->transaction_amount;
        $payment_id[1] = '-';
        $payment_status[1] = '-';
        $payment_type_id[1] = '-';
        $payment_transaction_amount[1] = '-';

      }

      switch ($to) {
        case 'to_client':
        case 'to_user':
          //configuro las variables a remplazar en el template
          $vars = array(
            '{facebook}',
            '{instagram}',
            '{youtube}',
            '{name_client}',
            '{email_client}',
            '{origin}',
            '{name_user}',
            '{email_user}',
            '{phone_user}',
            '{last_name_user}',
            '{date}',
            '{base}'
          );

          $values = array( 
            RRSS_FACEBOOK,
            RRSS_INSTAGRAM,
            RRSS_YOUTUBE,
            NAME_CLIENT,
            EMAIL_CLIENT,
            $post['origin'],
            $post['name'],
            $post['email'],
            $post['phone'],
            $post['last_name'],
            date('d-m-Y'),
            BASE 
          );
          break;

        case 'to_client_campaign_fiel':
        case 'to_user_campaign_fiel':
          //configuro las variables a remplazar en el template
          $vars = array(
            '{facebook}',
            '{instagram}',
            '{youtube}',
            '{name_client}',
            '{email_client}',
            '{origin}',
            '{name_user}',
            '{email_user}',
            '{phone_user}',
            '{dni_type_user}',
            '{dni_number_user}',
            '{sku_product}',
            '{category_product}',
            '{path_category_product}',
            '{value_product}',
            '{image_product}',
            '{payment_id_1}',
            '{payment_status_1}',
            '{payment_type_id_1}',
            '{total_paid_amount_1}',
            '{payment_id_2}',
            '{payment_status_2}',
            '{payment_type_id_2}',
            '{total_paid_amount_2}',
            '{date}',
            '{base}'
          );

          $values = array( 
            RRSS_FACEBOOK,
            RRSS_INSTAGRAM,
            RRSS_YOUTUBE,
            NAME_CLIENT,
            EMAIL_CLIENT,
            'Campaña Fiel Compañero',
            $post['name'],
            $post['email'],
            $post['phone'],
            $post['dni_type'],
            $post['dni_number'],
            $product['sku'],
            $product['category'],
            strtolower($product['category']),
            $product['value'],
            $product['image'],
            $payment_id[0],
            $payment_status[0],
            $payment_type_id[0],
            $payment_transaction_amount[0],
            $payment_id[1],
            $payment_status[1],
            $payment_type_id[1],
            $payment_transaction_amount[1],
            date('d-m-Y'),
            BASE 
          );
          break;
        
        default:
          //configuro las variables a remplazar en el template
          $vars = array(
            '{facebook}',
            '{instagram}',
            '{youtube}',
            '{name_client}',
            '{email_client}',
            '{origin}',
            '{name_user}',
            '{email_user}',
            '{phone_user}',
            '{last_name_user}',
            '{date}',
            '{base}'
          );

          $values = array( 
            RRSS_FACEBOOK,
            RRSS_INSTAGRAM,
            RRSS_YOUTUBE,
            NAME_CLIENT,
            EMAIL_CLIENT,
            $post['origin'],
            $post['name'],
            $post['email'],
            $post['phone'],
            $post['last_name'],
            date('d-m-Y'),
            BASE 
          );
          break;
      }

      $variables[0] = $vars;
      $variables[1] = $values;

      return $variables;

    }

    function selectEmailTemplate($post, $to, $product = NULL, $payments = NULL) 
    {

      if (!$product && !$payments) {
        $variables = $this->setVariablesToEmail($post, $to);
      } else {
        $variables = $this->setVariablesToEmail($post, $to, $product, $payments);
      }

      $vars = $variables[0];
      $values = $variables[1];

      switch ($to) {

        case 'to_client':
          $template = file_get_contents( __DIR__ . '/../includes/emails/contacts/contacts-to-client.php');
          break;

        case 'to_user':
          $template = file_get_contents( __DIR__ . '/../includes/emails/contacts/contacts-to-user.php');
          break;

        case 'to_client_campaign_fiel':
          $template = file_get_contents( __DIR__ . '/../includes/emails/campaign-fiel-compamiero/campaign-fiel-to-client.php');
          break;

        case 'to_user_campaign_fiel':
          $template = file_get_contents( __DIR__ . '/../includes/emails/campaign-fiel-compamiero/campaign-fiel-to-user.php');
          break;
        
        default:
          $template = file_get_contents( __DIR__ . '/../includes/emails/contacts/contacts-to-client.php');
          break;

      }

      //Remplazamos las variables por las marcas en los templates
      $template_final = str_replace($vars, $values, $template);

      return $template_final;

    }
   
  }

?>