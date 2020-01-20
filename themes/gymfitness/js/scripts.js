jQuery(document).ready( $ =>  {
    //menu movil responsive
    $('.site-header .menu-principal .menu').slicknav({
        label: '',
        appendTo: '.site-header'
    });


});


window.onscroll = () =>{
	const scroll = window.scrollY;
	const headerNav = document.querySelector('.barra-navegacion');
	const documentBody = document.querySelector('body');

	// si la cantidad de escroll es mayor a 300 agrega clase
	if (scroll > 300) {
		headerNav.classList.add('fixed-top');
		documentBody.classList.add('ft-activo');
	}else{
		documentBody.classList.remove('ft-activo');
		headerNav.classList.remove('fixed-top');
	}
}

