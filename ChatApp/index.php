<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Chat App</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script ></script>
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
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
		Launch demo modal
		</button>
		<!-- Modal -->
		<div class="modal fade" id="login" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h1 class="modal-title">Login:</h1>
					</div>
					<div class="modal-body">
						<div id="loginB"></div>
						<form class="form">
							<label for="usr">Identifiant:</label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" class="form-control" id="usr" placeholder="Identifiant">
							</div>
							<label for="pwd">Password:</label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" class="form-control" id="pwd" placeholder="Password">
							</div>
							<div class="input-group"><br>
								<div class="container">
									<div class="row">
										<div class="col-md-2">
											<button type="submit" class="btn boton">New User?</button>
										</div>
									</div>
								</div>
							</div>
							<div class="container-fluid">
								<div class="row">
									<div class="input-group"><br>
										<p><a href="#" class="tooltip-test" title="Oublie votre mot de passe?">Oublie votre mot de passe?</a></p>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" onclick="" class="btn btn-default">Ok!</button>
					</div>
				</div>
			</div>
		</div>
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
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</html>