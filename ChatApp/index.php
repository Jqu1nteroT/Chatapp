<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Chat App</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>		
			$(document).ready(function(){
      			$("#login").modal("show");
   			});
   	</script>
		<style>
		.test{
			border: 1px solid black;
			margin-top: 5px;
			height: 100%;
		}
		.area{
			border: 1px solid black;
			margin-top: 5px;
				height: 435px;
		}
		.lateral{
			border: 1px solid red;
			margin-top: 1px;
			height: 250px;
		}
		</style>
	</head>
	<body>
		<!-- <div class="modal fade" data-backdrop="static"  id="login" role="dialog" >
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
		</div> -->
		<!--Section msg-->
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-md-10 test">
						<form action="">
							<div class="form-group area">
								
							</div>
							<div class="form-group col-sm-6 col-md-10">
								<textarea class="form-control" id="usermsg" rows="1"></textarea>
							</div>
							<div class="col-sm-2 col-md-2">
								<button type="submit" class="btn btn-primary">Send</button>
							</div>
						</form>
					</div>
					<div class="col-sm-12 col-md-2 test">
						<div class="col-xs-6 col-sm-6 col-md-12 lateral">
							avatar
						</div>
						<div class="col-xs-6 col-sm-6 col-md-12 lateral">Conectados</div>
					</div>
					
				</div>
			</div>
		</section>
		<footer>
			piede de pagina
		</footer>
	</body>
</html>