jQuery(document).ready( $ =>  {

	//buscado input 1208321oebedjlwq
	$('#btn_buscar').on('click', function(){

		var termino = $('#buscar').val();
		
		alert(termino);

		// var postData ={
		// 	action: 'buscarResultados', // manda a la function del archivo function.php
		// 	buscar: termino //bsucar sale del name del input delpage buscador
		// }


		// jQuery.ajax({
		// 	url: admin_url.ajax_url, 
		// 	type: 'post',
		// 	data: postData
		// }).done(function(responde){
		// 	console.log(responde);
		// });
	});



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

