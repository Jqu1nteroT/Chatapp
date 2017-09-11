<?php 
session_start();

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
    $pq = $_POST["usr"];
	$pw = $_POST["pwd"];
	$usOk = "";
	$pwOk = "";
	if (isset($_POST['usr'])) {
    $resultat = $bdd->query("SELECT * FROM users WHERE login ='$pq'");
    while ($row = $resultat->fetch()) {
    	$usOk = $row['login'];
    	$pwOk = $row['mot_de_pass'];
        $id = $row['idusers'];
    }
    if (isset($pq) && isset($pw)){
    	if ($pq == $usOk && $pw == $pwOk) {
	   	header('Location:index.php?action=chat');
        $_SESSION['user']=$id;
    	}else{
    	header('Location:index.php?action=registrer');
   		}
    }

}
?>