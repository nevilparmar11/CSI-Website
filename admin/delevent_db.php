<?php include('auth.php'); ?>

<?php

	//if authorized user directly accesses this poge
	if(empty($_POST["event_id"]))
	{
		header("Location:view_event.php?msg=event_empty");
		die();
	}


	$event_id = $_POST['event_id'];
	$event_name = $_POST['event_name'];

	include('../db_connect.php');

	$stmt=$pdo->prepare("DELETE FROM Event_master WHERE id = ?");
	if($stmt->execute([$event_id])){
		$pdo = null;
		header("Location:view_event.php?msg=del&del_event=".$event_name);
		die();
	}

	header("Location:view_event.php?msg=error");

	$pdo = null;

?>
