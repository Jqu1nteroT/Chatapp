<?php 
session_start();
include('conexion.php');

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