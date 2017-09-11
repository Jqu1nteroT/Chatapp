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
    if (isset($_POST['login'])) {
    $resultat = $bdd->exec('INSERT INTO users (`login`, `mot_de_pass`, `image`) VALUES ('.$bdd->quote($_POST["login"]).','.$bdd->quote($_POST["mot_de_pass"]).','.$bdd->quote($_POST["image"]).')');
    }
    if ($resultat) {
    	header('Location:index.php?action=chat');
    }
	
?>
<div class="container">
	<div class="row" style="border:1px solid black; margin: 5%;">
		<div class="col-md-4" style="border: 1px solid red; margin-left: 30%;">
			<form method="POST">
			  <div class="form-group">
			    <label for="login">Login</label>
			    <input type="text" class="form-control" name="login" placeholder="login">
			  </div>
			  <div class="form-group">
			  	<label for="password">Password</label>
			    <input type="password" class="form-control" name="mot_de_pass">
			  </div>
			  <div class="form-group">
			  	<label for="avatar">Avatar</label>
			    <input type="file" class="form-control" name="image">
			  </div>
			  <button type="submit" class="btn btn-primary">Send</button>
			</form>
		</div>		
	</div>
</div>
