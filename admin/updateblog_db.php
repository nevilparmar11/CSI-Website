

<?php

	//if authorized user directly accesses this poge
	if(empty($_POST["blog_id"]))
	{
		header("Location:view_blog.php?msg=blog_empty");
		die();
	}
	
		$blog_id = $_POST["blog_id"];
	


	
 include('auth.php'); 



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


	
	
	

	//dont use ../ : as photo_link is going to be invoked by public html sibing folder.
	$photo_link = "assets/".$blog_id.".".$file_ext;

	//appending ../ for moving to parent sibiling folder
	move_uploaded_file($file_tmp,"../".$photo_link);

  	$title = $_POST['title'];
	$content = $_POST['content'];
	$author = $_POST['author'];
	$photo_link = "assets/".$blog_id.".".$file_ext;

	
	
	include('../db_connect.php');
	
	$stmt = $pdo->prepare("UPDATE blog_master SET title=?, content=?,author=? ,photo_link=? WHERE blog_id=? ");
	if($stmt->execute([$title,$content,$author,$photo_link,$blog_id]))
	{
	header("Location:add_blog.php?msg=bupdated");
	die();
	$pdo = null;
	}


	

?>
