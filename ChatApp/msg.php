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
    /*$message = $_POST['usermsg'];*/
    if (isset($_POST['usermsg'])) {
    	$resultat = $bdd->exec('INSERT INTO msg (`contenu`,`date`,`idusers`) VALUES ('.$bdd->quote($_POST["usermsg"]).', NOW(),'.
    	$bdd->quote($_SESSION['user']).')');
    }

    

?>