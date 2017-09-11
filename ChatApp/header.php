<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Chat</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scrips.js"></script>
		<style>
			html {
			width: 100%;
				height: 100%;
			}
			body{
				margin: 0 auto;
				padding: 0;
				height: auto;
				width: 100%;
				position: static;
			}
		
			#header{
				background-color: white;
				width: 100%;
			}
			.container-fluid{
				padding: 0;
			}
			.navbar{
				margin-bottom: 0;
			}
			#footer{
				padding: auto;
				position: fixed;
				width: 100%;
				height: auto;
				background-color: #F8F8F8;
				text-align: center;
				bottom: 0;
				margin-top: 1px;
				border-top:1px solid gray;
			}
			.foot{
				margin-left: 20%;
			}
			.logo{
				width: 50px;
				height: auto;
				margin-top: 0;
				margin-left: 80px;
			}
			#logout{
				margin-right: 40px;
			}
			.bg-light{
				margin-top: 5px;
			}
			.test{
			border: 1px solid black;
			margin-top: 5px;
			height: 100%;
			}
			.option{
			border: 1px solid black;
			margin-top: 5px;
			height: auto;
			}
			.area{
				border: 1px solid black;
				margin-top: 5px;
				height: 380px;
			}
			.lateral{
				border: 1px solid blue;
				margin-top: 1px;
				height: 215px;
				text-align: center;
			}
			.avatar{
				border:1px solid red;
				border-radius: 50px;
				height: 100px;
				text-align: center;
				width: 100px;
				margin: auto;
			}
		</style>
	</head>
	<body>
		<!--Section header-->
		<section id="header">
			<div class="container-fluid">
				<div class="row">					
					<nav class="navbar navbar-default fixed-top">
						<div class="navbar-header">
							<button type="submit" class="navbar-toggle responsive" data-toggle="collapse" data-target="#logout">Logout</button>
							<a href="#"><img class="logo" src="image/LogoChar.svg" alt="Logo"></a>
						</div>
						<form method="POST" action="logout.php" id="logout" class="navbar-light bg-light navbar-right collapse navbar-collapse">
							<button id="logout" type="submit" form="logout" class="btn btn-outline-success">Logout</button>
						</form>
					</nav>
				</div>
			</div>
		</section>