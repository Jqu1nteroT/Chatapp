//Montre modal avant de tout
	$(document).ready(function(){
      			$("#login").modal("show");
            setInterval(function(){cambio(false)},1000);
   			});


//Ajax por le montre le msj

function cambio(insert)
{	
  if (insert) {
	var msg = $('#usermsg').val();

    $.ajax({
        type: "POST",
        url: "msg.php",
        data: {usermsg:msg},
        success: function(data) {
          $('#mesag').html(data); 
        }
      });
    }else{
       $.ajax({
        type: "POST",
        url: "msg.php",
        success: function(data) {
          $('#mesag').html(data); 
        }
      });
             console.log('error!');

    }
}
