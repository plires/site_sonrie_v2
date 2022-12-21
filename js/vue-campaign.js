let app = new Vue({

  el: '#app',
  data: function() {
    return {
      errors: [],
      minValue: 0,
      currentCategory: '',
      pictures: [],
      nfts: [],
      products: [],
      currentProduct: [],
      user: {},
      otherValue: 0,
      showInput: false
    }
  },

  mounted() {
    this.getProducts();
    this.setMinValue()
  },

  methods: {

    cleanErrors() {
      this.errors = []
    },

    setUser() {
      this.user.name = $('#inputName').val()
      this.user.email = $('#inputEmail').val()
      this.user.phone = $('#inputPhone').val()
      this.user.dni = $('#inputDNI').val()
      this.user.cuit = $('#inputCUIT').val()
    },

    validateEmail(email) {
      const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email)
    },

    checkValuesUser(value) {

      this.cleanErrors()
      this.setUser() 

      if 
        ( 
          $.isNumeric(value) && 
          parseInt(value) >= this.minValue &&
          this.user.name != '' && 
          this.user.email != '' && 
          this.validateEmail(this.user.email) &&
          this.user.phone != '' && 
          this.user.dni != '' && 
          this.user.cuit != '' && 
          this.user.cuit.length == 11 
        ) {
        return true
      } 

      if ( !$.isNumeric(value) ) {
        this.errors.push('El valor debe ser numérico')
      }

      if ( this.showInput && parseInt(value) < this.minValue ) {
        this.errors.push('El valor debe ser mayor o igual a $' + this.minValue)
      }

      if ( this.user.name == '' ) {
        this.errors.push('ingresá tu nombre')
      }

      if ( this.user.email == '' || !this.validateEmail(this.user.email) ) {
        this.errors.push('ingresá tu email válido')
      }

      if ( this.user.phone == '' ) {
        this.errors.push('ingresá tu teléfono')
      }

      if ( this.user.dni == '' ) {
        this.errors.push('ingresá tu DNI')
      }

      if ( this.user.cuit == '' ) {
        this.errors.push('ingresá tu CUIT sin guiones ni puntos.')
      }

      if ( this.user.cuit.length != 11 ) {
        this.errors.push('ingresá los primeros 11 dígitos de tu CUIT')
      }
      
      return false
      
    },

    checkProductAvailable(productId) {

      var formData = new FormData();

      formData.append('product_id', productId)

      this.loading()
      axios.post('/new_site/php/campaigns/check-product-available.php', formData)
      .then(response => {
        if (response.data) {
          return response.data
        } else {
          this.errors.push('Error inesperado, por favor intentá nuevamente.')
        }

        this.loading()

      })
      .catch(errors => {

        this.errors.push('Existe un problema en el servidor. Intente mas tarde por favor')
        this.loading()
        
      })

    },

    sendDonationToMP(value, productId) {

      // Corroborar datos de usuario
      let checked = this.checkValuesUser(value)

      // Comprobar si el cuadro esta disponible
      // let isProductAvailable = this.checkProductAvailable(productId)

      if (checked) {
        var formData = new FormData();

        formData.append( 'value', value )
        formData.append( 'product', JSON.stringify(this.currentProduct) )
        formData.append( 'user', JSON.stringify(this.user) )

        this.loading()
        axios.post('/new_site/php/campaigns/compra-campania-fiel-companiero-mercadopago.php', formData)
        .then(response => {

          if (response.data) {
            this.loading()
            window.location.replace(response.data.link_pay);

          } else {

            this.errors.push('Error inesperado, por favor intentá nuevamente.')
            this.loading()

          }

        })
        .catch(errors => {

          this.errors.push('Existe un problema en el servidor. Intente mas tarde por favor')
          this.loading()
          
        })

      } 

    },

    showOrHideCustomInputValue() {
      this.showInput = !this.showInput
      this.setMinValue()
    },

    setCategory(category) {
      this.currentCategory = category
      this.setMinValue()
    },

    setMinValue() {
      switch (this.currentCategory) {
        case 'Cuadros':
          this.minValue = 75000
          this.otherValue = 75000
          break;

        case 'NFT':
          this.minValue = 10000
          this.otherValue = 10000
          break;

        this.minValue = 10000
          this.otherValue = 10000
          break;
      }
    },

    removeClassFromAllButtons(clase) {

      let buttons = $('.btn_valor')
      Object.entries(buttons).forEach(([key]) => {
        $(buttons[key]).removeClass(clase)
      })

      // remover la clase 'Active' en el boton de importe custom
      $('#btn_otro_importe').removeClass('active')

    },

    async getProducts() {

      this.loading()
      await axios.get('/new_site/php/campaigns/get-products.php')
      .then(response => {

        this.products = response.data
        this.pictures = response.data.filter( product => product.category === "Cuadros" )
        this.nfts = response.data.filter( nft => nft.category === "NFT" )

        const options = { style: 'currency', currency: 'ARS' };
        const numberFormat = new Intl.NumberFormat('es-AR', options);
        
        this.pictures.forEach((picture, index) => {
          picture.valueFormat = numberFormat.format(picture.value)
        });

        this.nfts.forEach((nft, index) => {
          nft.valueFormat = numberFormat.format(nft.value)
        });

        this.loading()        

      })
      .catch(error => {
        this.errors.push('Existe un problema en el servidor. Intente mas tarde por favor')
        this.loading()
      })

    },

    setCurrentProduct(id) {
      this.cleanErrors()
      let product = this.products.filter( product => product.id == id )
      this.currentProduct = product[0]
    },

    loading() {
      $('#loading').toggleClass('show_spinner')
    }

  },
  computed: {

  }
});

