<?php

include('auth.php');
session_destroy();
header('Location:admin_login.php?msg=logout');
die();
?>
