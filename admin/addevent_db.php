<?php include('auth.php'); ?>

<?php

	//if authorized user directly accesses this poge
	if(empty($_POST["name"]) || empty($_POST["type"]) || empty($_POST["date"]) || empty($_POST["description"]))
	{
		header("Location:add_event.php?msg=event_empty");
		die();
	}

	$file_name = $_FILES['photo_link']['name'];
    $file_size =$_FILES['photo_link']['size'];

	echo $file_size;

    $file_tmp =$_FILES['photo_link']['tmp_name'];
    $file_type=$_FILES['photo_link']['type'];

	$temp_1 = explode('.',$file_name);
    $file_ext=strtolower(end($temp_1));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
    	header("Location:add_event.php?msg=error_photo");
		die();
    }


	include('../db_connect.php');
	$event_id = $pdo->query("SELECT MAX(id) FROM Event_master")->fetchColumn();
	$event_id = (int)$event_id + 1;

	echo $event_id;

	//dont use ../ : as photo_link is going to be invoked by public html sibing folder.
	$photo_link = "assets/images/".$event_id.".".$file_ext;

	//appending ../ for moving to parent sibiling folder
	move_uploaded_file($file_tmp,"../".$photo_link);

  	$name = $_POST['name'];
	$type = $_POST['type'];
	$date = $_POST['date'];
	$desc = $_POST['description'];
	$photo_link = "assets/images/".$event_id.".".$file_ext;
	$blog_link = $_POST['blog_link'];

	$stmt = $pdo->prepare("INSERT INTO event_master (name,type,date,description,photo_link,blog_link) VALUES (?, ?, ?, ?, ?, ?)");
	$stmt->execute([$name, $type, $date,$desc,$photo_link,$blog_link]);

	header("Location:add_event.php?msg=success");
	die();

	$pdo = null;

?>
