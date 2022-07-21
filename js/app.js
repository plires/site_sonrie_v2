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
