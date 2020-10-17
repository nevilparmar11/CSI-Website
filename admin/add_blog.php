<?php include('auth.php'); ?>
<html lang="en">

<head>
  <title>CSI DDU | Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">

  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../css/aos.css">

  <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

</head>
<body>

		<?php include("admin_navbar.php"); ?>
		<section class="container site-section">
			<h1 class="text-center text-primary mt-5 mb-4"> Add Blog </h1>
		</section>


		<div id="notification">
			<?php
			 	if(isset($_GET['msg']))
				{
					if($_GET['msg']=="success")
					{
						echo '<div class="alert alert-success text-center">
	  					<strong>Success!</strong> Blog added successfully.
						</div>';
					}
					else if($_GET['msg']=="bupdated")
					{
						echo '<div class="alert alert-success text-center">
	  					<strong>Success!</strong> Blog Updated successfully.
						</div>';
					}
					else if($_GET['msg']=="error")
					{
						echo '<div class="alert alert-danger text-center">
  						<strong>Oops!</strong> An error occured while adding blog to database. Contact admin.
						</div>';
					}
					else if($_GET['msg']=="blog_empty")
					{
						echo '<div class="alert alert-warning text-center">
  						<strong>Hello,</strong> Please fill the blog form first.
						</div>';
					}
					else if($_GET['msg']=="error_photo")
					{
						echo '<div class="alert alert-danger text-center">
  						<strong>Oops!</strong> Error uploading photo for the blog. Contact admin or try uploading again.
						</div>';
					}
					else
					{
						echo $_GET['msg'];
					}
				}
			?>
		</div>

		<form class="container site-section mt-4 mb-5" method="post" action="addblog_db.php" enctype="multipart/form-data">

		  <div class="form-group">
		    <label for="blog_title">Blog Title</label>
		    <input type="text" class="form-control" id="blog_title" placeholder="Blog Title" name="title" required>
		    <small id="blog_title_help" class="form-text text-muted">Provide a short and intresting title within 8 words.</small>
		  </div>

		  <div class="form-group">
    		<label for="blog_content">Blog Content</label>
    		<textarea class="form-control" id="blog_content" rows="17" name="content" required></textarea>
			<small id="blog_content_help" class="form-text text-muted">Tip: You can use basic bold, italic, underline Tags for proper fomatting. Do NOT use any other markup.</small>
  		  </div>

		  <label for="blog_photo">Blog Photo Upload</label>
		  <div class="form-group custom-file mb-5">
			   <input type="file" class="custom-file-input" id="photo_link" name="photo_link" required>
			   <label class="custom-file-label" id="blog_photo_help" for="blog_photo">Choose file</label>
			   <small id="blog_photo_help1" class="form-text text-muted">Provide a high-resolution JPEG/JPG/PNG image only.</small>
		  </div>

		  <div class="form-group">
		    <label for="blog_author">Blog Author</label>
		    <input type="text" class="form-control" id="blog_author" placeholder="Blog Author" name="author">
		    <small id="blog_author_help" class="form-text text-muted">Leave blank to use default 'CSI DDU'.</small>
		  </div>

		  <button type="submit" class="btn btn-primary mb-5">Submit</button>
		</form>

		<footer class="navbar fixed-bottom navbar-dark bg-dark text-center text-white">
		   <p class="mb-0"> Copyright &copy; 2019 | Designed & Developed by CSI DDU Student Branch </p>
	   </footer>


		<script src="../js/jquery-3.3.1.min.js"></script>
	    <script src="../js/jquery-ui.js"></script>
	    <script src="../js/popper.min.js"></script>
	    <script src="../js/bootstrap.min.js"></script>
	    <script src="../js/owl.carousel.min.js"></script>
	    <script src="../js/jquery.countdown.min.js"></script>
	    <script src="../js/jquery.easing.1.3.js"></script>
	    <script src="../js/aos.js"></script>
	    <script src="../js/jquery.fancybox.min.js"></script>
	    <script src="../js/jquery.sticky.js"></script>
	    <script src="../js/isotope.pkgd.min.js"></script>


	    <script src="../js/main.js"></script>

		<script>
			//following code shows name of the file appear on select
			$("#photo_link").on("change", function() {
			  var fileName = $(this).val().split("\\").pop();
			  $(this).siblings("#blog_photo_help").addClass("selected").text(fileName);
			});
		</script>
</body>
</html>
