<div data-aos="fade-up" class="col-md-12 form_donation">

	<div class="content_form content_form_donation">

		<div v-if="errorsDonation.length > 0" class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>información</strong>
		  <button @click="cleanErrors()" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  <ul>
		    <li v-for="error in errorsDonation" v-cloak>{{ error }}</li>
		  </ul>
		</div>

		<div class="row">

			<div class="col-md-5 content_data">
				<div>
			    <h2 data-aos="fade-up">Ayudá y doná</h2>
			    <h3 data-aos="fade-up">Construyamos el futuro juntos</h3>

			    <p data-aos="fade-up">
			    	Con tu <strong>ayuda</strong> trabajamos en programas para que cada vez más gente pueda alcanzar el <strong>bienestar.</strong>
			  	</p>
				</div>
			</div>

			<div class="col-md-6 offset-md-1">
				<div data-aos="fade-up" class="content_buttons">
		  		<div class="importes">
		    		<button @click="setAmountToDonate(100)" id="100" class="btn btn-primary btn_valor">$100</button>
		    		<button @click="setAmountToDonate(200)" id="200" class="btn btn-primary btn_valor">$200</button>
		    		<button @click="setAmountToDonate(500)" id="500" class="btn btn-primary btn_valor">$500</button>
		    		<button @click="setAmountToDonate(1000)" id="1000" class="btn btn-primary btn_valor">$1000</button>
		    		<button @click="setAmountToDonate(1500)" id="1500" class="btn btn-primary btn_valor">$1500</button>
		    		<button @click="setAmountToDonate(2000)" id="2000" class="btn btn-primary btn_valor">$2000</button>
		  		</div>

		  		<div class="otro_importe">
		    		<button @click="setAmountCustomToDonate(false)" id="btn_otro_importe" class="btn btn-primary btn_otro_importe">OTRO</button>
		    		<input 
		    			id="txt_otro_importe" 
		    			type="number" 
		    			class="form-control" 
		    			name="other" 
		    			v-model="amountToDonate"
		    			placeholder="IMPORTE">
		  		</div>

		  		<div class="content_button_siguiente">
		  			<p v-if="parseInt(amountToDonate) && amountToDonate >= minDonation" v-cloak>Importe a donar $: {{ amountToDonate }}</p>
		  			<p v-else-if="amountToDonate != 'IMPORTE'" class="error_donation" v-cloak>El valor debe ser numérico y mayor a ${{minDonation}}.</p>
		  			<button 
		  				@click="cleanErrors()" 
		  				data-bs-toggle="modal" 
		  				data-bs-target="#modalDonation" 
		  				class="btn btn-primary">DONAR
		  			</button>
		  		</div>

		  	</div>
			</div>
			
		</div>

	</div>
  
</div>