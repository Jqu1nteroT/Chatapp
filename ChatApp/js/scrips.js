//Montre modal avant de tout
	$(document).ready(function(){
      			$("#login").modal("show");
   			});

//Ajax por le montre le msj

function getXHR (argument) {

		var xhr = null;

		if (window.XMLHttpRequest){

			xhr = new XMLHttpRequest();

		} else if(window.ActiveXObjet){

			try {

				xhr = new ActiveXObjet("Msxml2.XMLHTTP");
			}
			catch(e){

				xhr = new ActiveXObjet("Microsoft.XMLHTTP");
							}
		} else {

			alert("achetez-vous une autre machine");
			xhr = false;
		}
		return xhr;
	};
