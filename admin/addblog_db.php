s<?php include('auth.php'); ?>

<?php

	//if authorized user directly accesses this poge
	if(empty($_POST["title"]) || empty($_POST["content"]))
	{
		header("Location:add_blog.php?msg=blog_empty");
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
    	header("Location:add_blog.php?msg=error_photo");
		die();
    }


	include('../db_connect.php');
	$blog_id = $pdo->query("SELECT MAX(blog_id) FROM Blog_master")->fetchColumn();
	$blog_id = (int)$blog_id + 2;

	echo "Id: ".$blog_id;

	//dont use ../ : as photo_link is going to be invoked by public html sibing folder.
	$photo_link = "assets/".$blog_id.".".$file_ext;

	//appending ../ for moving to parent sibiling folder
	move_uploaded_file($file_tmp,"../".$photo_link);

  	$title = $_POST['title'];
	$content = $_POST['content'];
	$author = $_POST['author'];
	$photo_link = "assets/".$blog_id.".".$file_ext;


	$stmt = $pdo->prepare("INSERT INTO blog_master (title,content,author,photo_link) VALUES (?, ?, ?, ?)");
	$stmt->execute([$title, $content, $author, $photo_link]);

	header("Location:add_blog.php?msg=success");
	die();

	$pdo = null;

?>
