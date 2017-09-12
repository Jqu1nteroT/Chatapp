//Montre modal avant de tout
	$(document).ready(function(){
      			$("#login").modal("show");
   			});

//Ajax por le montre le msj

function cambio()
{	
	var msg = $('#usermsg').val();
    $.ajax({
      type: "POST",
      url: "msg.php",
      data: {usermsg:msg},
      success: function(data) {
        $('#mesag').html(data); 
      }
    });
}