const header = document.getElementsByTagName("header")[0]
const toggle = document.getElementById('toggleIcon')
const nav = document.getElementsByTagName('nav')[0]

toggle.addEventListener('click', function(){
  menuToggle()
});

function menuToggle() {
  nav.classList.toggle('active')
  toggle.classList.toggle('active')
  
  if (hamburger.classList.contains("fa-bars")) {
    hamburger.classList.remove('fa-bars')
    hamburger.classList.add('fa-times')
  } else {
    hamburger.classList.add('fa-bars')
    hamburger.classList.remove('fa-times')
  }
}

// HABILITAR ESTA FUNCION PARA QUE EL HEADER APAREZCA Y DESAPAREZCA EN FUNCION
// DEL SCROLL HACIA ARRIBA O ABAJO
var start = true;
window.addEventListener('scroll', function(){

	if ( window.scrollY > 100) {
		showlHeader()
	} else {
		hidelHeader()
	}

});

function showlHeader() {
  header.classList.add('background')
  document.getElementById("first_section").style.marginTop = "160px"
}

function hidelHeader() {
	header.classList.remove('background')
  document.getElementById("first_section").style.marginTop = "0"
}

AOS.init();

var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);

if ( filename === '') { // Seccion Home

  $('.content_logos').slick({
      dots: false,
      autoplay: true,
      infinite: true,
      speed: 300,
      slidesToShow: 8,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1600,
          settings: {
            dots: false,
            slidesToShow: 7
          }
        },
        {
          breakpoint: 1400,
          settings: {
            dots: false,
            slidesToShow: 6
          }
        },
        {
          breakpoint: 1200,
          settings: {
            dots: false,
            slidesToShow: 5
          }
        },
        {
          breakpoint: 992,
          settings: {
            dots: false,
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            dots: false,
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            dots: false,
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 480,
          settings: {
            dots: false,
            slidesToShow: 2,
          }
        }
      ]
    });

}
