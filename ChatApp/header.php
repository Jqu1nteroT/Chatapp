<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="autor" content="Juan P Quintero">
		<meta name="description" content="AppChat pour un chat global">
		<meta name="keywords" content="chat, app, global, free">
		<title>AppChat</title>
		<link rel="icon" type="image/svg" href="image/LogoChar.svg" sizes="16x16">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scrips.js"></script>
	
	</head>
	<body>
		<!--Section header-->
		<section id="header">
			<div class="container-fluid">
				<div class="row">					
					<nav class="navbar navbar-default fixed-top">
						<div class="navbar-header">
							<button type="submit" class="navbar-toggle responsive" data-toggle="collapse" data-target="#logout">Logout</button>
							<a href="index.php?action=login"><img class="logo" src="image/LogoChar.svg" alt="Logo"></a>
						</div>
						<form method="POST" action="logout.php" id="logout" class="navbar-light bg-light navbar-right collapse navbar-collapse">
							<button id="logout" type="submit" form="logout" class="btn btn-outline-success">Logout</button>
						</form>
					</nav>
				</div>
			</div>
		</section>