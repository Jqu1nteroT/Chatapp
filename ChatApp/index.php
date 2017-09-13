<?php
session_start();

$action = !empty($_GET['action'])?$_GET['action'] : 'default';

switch ($action) {
	case 'registrer':
		//require_once 'headerOff.php';
		require_once 'registrer.php';
		break;

	case 'chat':
		require_once 'header.php';
		require_once 'chat.php';
		break;

	default:
		require_once 'headerOff.php';
		require_once 'entrer.php';
		break;
}

require_once 'footer.php';

?>
