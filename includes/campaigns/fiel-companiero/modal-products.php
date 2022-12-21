<!-- Modal Products -->
<div 
  class="modal fade" 
  id="modalProducts" 
  tabindex="-1" 
  aria-labelledby="staticBackdropLabel" 
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <p class="modal-title" id="modalProductsLabel">Ingresá tus datos</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <p class="name">SKU Producto: {{currentProduct.sku}}</p>
        <p v-if ="currentProduct.category == 'Cuadros'" class="artist mb-2">Artista: {{currentProduct.artist}}</p>
        <p v-if ="currentProduct.category == 'Cuadros'" class="materialidad mb-2" v-html="currentProduct.description"> {{currentProduct.description}}</p>
        <div class="text-center">
          <img
            v-if ="currentProduct.category == 'Cuadros'" 
            class="img-fluid img_product" 
            :src="'./img/campaigns/fiel-companero/cuadros/' + currentProduct.image" 
            :alt="currentProduct.name + ' - ' + currentProduct.id">

          <img
            v-if ="currentProduct.category == 'NFT'" 
            class="img-fluid img_product" 
            :src="'./img/campaigns/fiel-companero/nft/' + currentProduct.image" 
            :alt="currentProduct.name + ' - ' + currentProduct.id">
            
          <p id="valueProduct" class="value transition">{{currentProduct.valueFormat}}<br><span>Valor base</span></p>

          <div class="form-check">
            <input @click="showOrHideCustomInputValue()" class="form-check-input" type="checkbox" value="" id="flexCheckCustomValue">
            <label class="form-check-label" for="flexCheckCustomValue">
              Creemos que el arte tiene un valor distinto para cada persona. Tildá la casilla y tendrás el espacio para que puedas subir el precio de compra y donar una mayor suma a la campaña con la compra de tu NFT o cuadro!
            </label>
          </div>

          <input 
            v-if ="showInput"
            id="inputValueProduct" 
            type="number" 
            v-model="otherValue" 
            :min="currentProduct.value"
            class="form-control transition" 
            :placeholder="'Colocá un número mayor a: ' + currentProduct.valueFormat" 
            >

          <div v-if="errors.length > 0" class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="content">
              <strong>Errores</strong>
              <button @click="cleanErrors()" type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <ul>
              <li v-for="error in errors" v-cloak>- {{ error }}</li>
            </ul>
          </div>

          <input 
            id="inputName" 
            class="form-control form-control-sm" 
            type="text" 
            placeholder="Tu nombre...">

          <input 
            id="inputEmail" 
            class="form-control form-control-sm" 
            type="email" 
            placeholder="Tu email...">

          <input 
            id="inputPhone" 
            class="form-control form-control-sm" 
            type="text" 
            placeholder="Tu teléfono...">

          <input 
            id="inputDNI" 
            class="form-control form-control-sm" 
            type="number" 
            placeholder="Tu DNI...">

          <input 
            id="inputCUIT" 
            class="form-control form-control-sm" 
            type="tel" 
            maxlength="11"
            placeholder="Tu CUIT sin guiones, espacios o puntos.">

          <button @click="sendDonationToMP(otherValue, currentProduct.id)" class="btn btn-primary">Comprar</button>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Modal Products end -->