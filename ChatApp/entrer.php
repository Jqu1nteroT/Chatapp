<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Entrar</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>		
			$(document).ready(function(){
      			$("#login").modal("show");
   			});
   	</script>
	</head>
	<body>
		<div class="modal fade" data-backdrop="static"  id="login" role="dialog" >
			<div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-header">
						<h1 class="modal-title">Login:</h1>
					</div>
					<div class="modal-body">
						<form class="form" method="POST" action="login.php" id="loginfrom">
							<label for="usr">Identifiant:</label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" name="usr" placeholder="Identifiant">
							</div>
							<label for="pwd">Password:</label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" class="form-control" name="pwd" placeholder="Password">
							</div>
							<div class="input-group"><br>
								<div class="container">
									<div class="row">
										<div class="col-md-2">
											<a href="conexion.php" class="btn btn-info" role="button">New User?</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<a href="https://www.google.com" class="btn btn-info" role="button">Close</a>
						<button type="submit" class="btn btn-default" form="loginfrom">Connecte</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>