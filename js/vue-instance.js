let app = new Vue({

  el: '#app',
  data: function() {
    return {
      amountToDonate: 'IMPORTE',
      errorsDonation: [],
      minDonation: 100
    }
  },

  mounted() {
    
  },

  methods: {

    cleanErrors() {
      this.errorsDonation = []
    },

    setAmountToDonate(value) {

      // Setear el valor del boton seleccionado
      this.amountToDonate = value

      // Inhabilitar el input de importe custom
      this.showCustomInputToDonate(false)

      // remover clase 'active' de todos los botones
      this.removeClassFromAllButtons('active')
      
      // Colocar la clase 'Active' en el boton seleccionado
      $('#'+value).addClass('active')
      
    },

    checkValue(value) {

      if ( $.isNumeric(value) && parseInt(value) >= this.minDonation ) {
        return true
      } else {
        this.errorsDonation.push('El valor debe ser numérico y mayor a $' + this.minDonation)
        $('#modalDonation').modal('hide');
        return false
      }
      
    },

    sendDonationToMP(value) {

      // Corroborar que value sea un numero y no string
      let checked = this.checkValue(value)

      if (checked) {

        var formData = new FormData();

        formData.append('value', value)

        // this.loading()
        axios.post('/../php/donation-mercadopago.php', formData)
        .then(response => {

          if (response.data) {

            // this.loading()
            window.location.replace(response.data.link_pay);

          } else {

            this.errorsDonation.push('Error inesperado, por favor intentá nuevamente.')
            // this.loading()

          }

        })
        .catch(errors => {

          this.errorsDonation.push('Existe un problema en el servidor. Intente mas tarde por favor')
          // this.loading()
          
        })

      } 

    },

    setAmountCustomToDonate(value) {
      // mostrar el input custom
      this.showCustomInputToDonate(true)

      // remover clase 'active' de todos los botones
      this.removeClassFromAllButtons('active')

      // Colocar la clase 'Active' en el boton de importe custom
      $('#btn_otro_importe').addClass('active')

    },

    showCustomInputToDonate(state) {

      if (state) {
        $('#txt_otro_importe').addClass('active')
      } else {
        $('#txt_otro_importe').removeClass('active')
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

    loading() {
      // $('#loading').toggleClass('show_spinner')
    }

  },
  computed: {

    // filterEpisodesByUnit: function() {
    //   return this.episodes.filter((episode) => episode.unit_id == this.currentUnit)
    // },

  }
});

