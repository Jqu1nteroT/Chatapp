<?php
session_start();

include('conexion.php');
    /*$message = $_POST['usermsg'];*/
    if (isset($_POST['usermsg'])) {
    	$resultat = $bdd->exec('INSERT INTO msg (`contenu`,`date`,`idusers`) VALUES ('.$bdd->quote($_POST["usermsg"]).', NOW(),'.
    	$bdd->quote($_SESSION['user']).')');
    }  
        $id = $_SESSION['user'];
        $resultat = $bdd->query("SELECT * FROM msg,users where users.idusers = msg.idusers ORDER BY date DESC");
         $x = array();
    while ($donne = $resultat->fetch()) {
        $x[] = $donne;
    }

    foreach ($x as $row) {
        ?>
    <div class="AreaMsg">
        <?php echo $row['login']."&nbsp;".$row['date']."&nbsp;".$row['contenu']."&nbsp;<br>";?>
    </div>        
<?php   
     }
?>
