<?php include('auth.php'); ?>

<?php

	//if authorized user directly accesses this poge
	if(empty($_POST["blog_id"]))
	{
		header("Location:view_blog.php?msg=blog_empty");
		die();
	}

	$blog_id = $_POST['blog_id'];
	$blog_name = $_POST['blog_name'];

	include('../db_connect.php');

	$stmt=$pdo->prepare("DELETE FROM Blog_master WHERE blog_id = ?");
	if($stmt->execute([$blog_id])){
		$pdo = null;
		header("Location:view_blog.php?msg=del&del_blog=".$blog_name);
		die();
	}

	header("Location:view_blog.php?msg=error");

	$pdo = null;

?>
