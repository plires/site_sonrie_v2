<?php

  require_once("repoProducts.php");

  class RepoProductsSQL extends repoProducts
  {
    protected $conexion;

    public function __construct($conexion) 
    {
      $this->conexion = $conexion;
    }

    public function saveTransaction( $user, $product, $payment )
    {

      try {

        $sql = "INSERT INTO sales values(default, :user_name, :user_email, :user_phone, :user_dni_type, :user_dni_number, :product_id, :collection_id, :status, :category, :payment_type, :transaction_amount, :created_at)";

        $stmt = $this->conexion->prepare($sql);
        
        $stmt->bindValue(":user_name", $user['name'], PDO::PARAM_STR);
        $stmt->bindValue(":user_email", $user['email'], PDO::PARAM_STR);
        $stmt->bindValue(":user_phone", $user['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":user_dni_type", $user['dni_type'], PDO::PARAM_STR);
        $stmt->bindValue(":user_dni_number", $user['dni_number'], PDO::PARAM_STR);
        $stmt->bindValue(":product_id", $product['id'], PDO::PARAM_STR);
        $stmt->bindValue(":collection_id", $payment->id, PDO::PARAM_STR);
        $stmt->bindValue(":status", $payment->status, PDO::PARAM_STR);
        $stmt->bindValue(":category", $product['category'], PDO::PARAM_STR);
        $stmt->bindValue(":payment_type", $payment->payment_type_id, PDO::PARAM_STR);
        $stmt->bindValue(":transaction_amount", $payment->transaction_amount, PDO::PARAM_STR);
        $stmt->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);

        return $stmt->execute();

      } catch (Exception $e) {

        header("HTTP/1.1 500 Internal Server Error"); 
             
      }

    }

    public function getPaymentType($payment_type_id)
    {

      switch ($payment_type_id) {
        case 'credit_card':
          $payment_type = 'Tarjeta de Crédito';
          break;
        case 'account_money':
          $payment_type = 'Dinero en Cuenta';
          break;
        default:
          $payment_type = 'A Consultar';
          break;
      }

      return $payment_type;

    }

    public function getPaymentStatus($payment_status)
    {

      switch ($payment_status) {
        case 'pending':
          $status = 'Pendiente';
          break;
        case 'approved':
          $status = 'Aprobada';
          break;
        case 'inprocess':
          $status = 'En espera';
          break;
        case 'inmediation':
          $status = 'En espera';
          break;
        case 'rejected':
          $status = 'Failed';
          break;
        case 'cancelled':
          $status = 'Cancelada';
          break;
        case 'refunded':
          $status = 'Reintegrada';
          break;
        case 'chargedback':
          $status = 'Contracargo';
          break;
        default:
          $status = 'En espera';
          break;
      }

      return $status;

    }

    public function setProductAsUnavailable($product_id)
    {
      try {

        $sql = "UPDATE products SET available = '0' WHERE id = '$product_id' ";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return true;
        
      } catch (Exception $e) {

        header("HTTP/1.1 500 Internal Server Error"); 
             
      }
    }

    public function getProducts()
    {

      try {

        $sql = "
          SELECT t1.*, t2.name AS name_campaign, t2.description  AS description_campaign
          FROM products AS t1
          INNER JOIN campaigns AS t2 ON t1.campaign_id = t2.id;
        ";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $products;
        
      } catch (Exception $e) {

        header("HTTP/1.1 500 Internal Server Error"); 
             
      }

    }

    public function getProductById($product_id)
    {

      try {

        $sql = "SELECT * FROM products WHERE id = '$product_id' ";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        return $product;
        
      } catch (Exception $e) {

        header("HTTP/1.1 500 Internal Server Error"); 
             
      }

    }

    public function getProductBySku($product_sku)
    {

      try {

        $sql = "SELECT * FROM products WHERE sku = '$product_sku' ";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        return $product;
        
      } catch (Exception $e) {

        header("HTTP/1.1 500 Internal Server Error"); 
             
      }

    }

  }

?>
