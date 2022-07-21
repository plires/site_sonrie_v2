<div class="modal fade" id="modalDonation" tabindex="-1" aria-labelledby="modalDonationLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDonationLabel">Confirmación</h5>
        <button type="button" class="btn-close transition" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div v-if="parseInt(amountToDonate) && amountToDonate >= minDonation && amountToDonate != 'IMPORTE' ">
          <p>
            Cuando hagas click en "CONFIRMAR" serás redirigido al sitio de Mercadopago para poder realizar la operación. <br><br>
            <span class="text-center d-block">Vas a donar ${{ amountToDonate }} a Fundación Sonrie la Vida.</span> <br>
            <span class="text-center d-block"><strong>¡Muchas gracias por tu aporte!</strong></span>
          </p>
          <div class="text-center">
            <img class="img-fluid logo" src="./img/iso-header.png" alt="logo sonrie la vida en modal">
          </div>
        </div>
        <p v-else>
          Por favor verificá los valores ingresados. <br>
          El valor debe ser numérico y mayor a ${{minDonation}}.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">CERRAR</button>

        <button 
          v-if="parseInt(amountToDonate) && amountToDonate >= minDonation && amountToDonate != 'IMPORTE'"
          @click="sendDonationToMP(amountToDonate)" 
          id="send_donation" 
          type="button" 
          class="btn btn-primary">
          CONFIRMAR
        </button>
        
      </div>
    </div>
  </div>
</div>
