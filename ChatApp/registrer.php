<?php
include('conexion.php');

$resultat = false;
if (isset($_FILES["imagen"])) {

$target_dir = "image/";
$image = $target_dir . basename($_FILES["imagen"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($image,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
$login = $_POST["login"];
$pass = $_POST["mot_de_pass"];

	/*$image = addslashes(file_get_contents($_FILE['image']['tmp_name']));*/

$resultat = $bdd->prepare('INSERT INTO users (login, mot_de_pass, image) VALUES ('.$bdd->quote($login).','.$bdd->quote($pass).','.$bdd->quote($image).')')->execute();
$resultat2 = $bdd->query("SELECT * FROM users where login = '$login'");
$new = $resultat2->fetch();
	$id = $new['idusers'];	

if ($resultat) {
	$_SESSION['user']=$id;
	header('Location:index.php?action=chat');
}
}
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="autor" content="Juan P Quintero">
		<meta name="description" content="AppChat pour un chat global">
		<meta name="keywords" content="chat, app, global, free">
		<title>AppChat</title>
		<link rel="icon" type="image/svg" href="image/LogoChar.svg" sizes="16x16">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
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
							<a href="index.php?action=login"><img class="logo" src="image/LogoChar.svg" alt="Logo"></a>
						</div>
						</form>
					</nav>
				</div>
			</div>
		</section>
<div class="container">
	<div class="row registre">
		<div class="col-md-4 formRe">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="login">Login</label>
					<input type="text" class="form-control" name="login" placeholder="login" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="mot_de_pass" required>
				</div>
				<div class="form-group">
					<label for="avatar">Avatar</label>
					<input type="file" class="form-control" name="imagen" accept="image/*">
				</div>
				<button type="submit" class="btn btn-primary">Send</button>
			</form>
		</div>
	</div>
</div>