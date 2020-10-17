<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: admin_login.php?msg=unauth');
		die();
    }

?>
