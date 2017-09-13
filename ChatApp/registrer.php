<?php

try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'pablo', 'user');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
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


if ($resultat) {
	$_SESSION['user']=$id;
	header('Location:index.php?action=chat');
}
}
	
?>
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