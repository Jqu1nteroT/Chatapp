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
    $id = $_SESSION["user"];


    $resultat = $bdd->query("SELECT * FROM users WHERE idusers ='$id' ");
       $donnees = $resultat->fetch();
 ?>

<section id="chat">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-10 test">
				<form class="form" method="POST" action="msg.php" id="msg">
					<div class="form-group area">
						<!-- metre le AJAX ici-->
					</div>
					<div class="form-group col-xs-10 col-sm-10 col-md-10">
						<textarea class="form-control" name="usermsg" rows="1"></textarea>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2">
						<button type="submit" form="msg" class="btn btn-primary">Send</button>
					</div>
				</form>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2 option">
				<div class="col-xs-6 col-sm-6 col-md-12 lateral">
					<div class="avatar"><?= $donnees['image']?></div>
					<h1><?= $donnees['login']?></h1>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-12 lateral">Conectados</div>
			</div>
		</div>
	</div>
</section>