<?php
include('conexion.php');
    
	$id = $_SESSION["user"];

    $resultat = $bdd->query("SELECT * FROM users WHERE idusers ='$id' ");
       $donnees = $resultat->fetch();

    $resultat1 = $bdd->query("SELECT * FROM users");
       $donnees1 = $resultat1->fetch();
 ?>

<section id="chat" style="border: 1px solid blue; margin: 1px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-10 test">
				<form class="form" method="POST" action="msg.php" id="msg">
					<div class="form-group area" id="mesag">
						
					</div>
					<div class="form-group col-xs-10 col-sm-10 col-md-10">
						<textarea id="usermsg" class="form-control" name="usermsg" rows="1" required></textarea>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2">
						<button onclick="cambio(true)" type="button" form="msg" class="btn btn-primary">Send</button>
					</div>
				</form>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2 option">
				<div class="col-xs-6 col-sm-6 col-md-12 lateral" >
					<div class="avatar" style="background-image:url('<?= $donnees['image']?>');"></div>
					<h1><?= $donnees['login'];?></h1>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-12 lateral">
					<h1>Friends:</h1>
					<b><?= $donnees1['login']?></b>
				</div>
			</div>
		</div>
	</div>
</section>