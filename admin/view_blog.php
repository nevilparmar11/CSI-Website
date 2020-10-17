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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<body>

		<?php include("admin_navbar.php"); ?>

		<section class="container site-section">
			<h1 class="text-center text-primary mt-5 mb-4"> Recorded Blogs </h1>
		</section>


		<div id="notification">
			<?php
			 	if(isset($_GET['msg']))
				{
					if($_GET['msg']=="del")
					{
						echo '<div class="alert alert-danger text-center">
  						Deleted! <strong> Blog : '.$_GET['del_blog'].' </strong>has been successfully deleted from the records.
 						<br><small class="text-muted"> If you deleted the blog accidently, call site admin. </small>
						</div>';
					}
					else if($_GET['msg']=="error")
					{
						echo '<div class="alert alert-danger text-center">
  						<strong>Error!</strong> An error occured while deleteing blog from database. Contact Admin.
						</div>';
					}
				}
			?>
		</div>

		<div class="container site-section mt-5 mb-5 col-md-7 justify-content-center">

				<table id="blogs" class="table table-hover table-responsive dt-responsive" style="width:100%;">
				<thead>
		            <tr>
		                <th scope="col">Title</th>
		                <th scope="col">Date Published</th>
		                <th scope="col">Author</th>
		                <th scope="col">Photo Link</th>
		                <th scope="col">Update</th>
						<th scope="col">Delete</th>
						<th scope="col">Blog Content</th>
		            </tr>
		        </thead>
		        <tbody>

					<?php

		  			include("../db_connect.php");
		  			$sql = "SELECT * from Blog_master ORDER BY date_published DESC";
		  			$blog_list = $pdo->query($sql)->fetchAll();
		  			// now $blog variable has list of blogs

		  			foreach($blog_list as $blog){
		  			?>

					<tr>
		                <td><?php echo $blog['title']; ?></td>
		                <td><?php echo date("jS M, Y", strtotime($blog['date_published'])); ?></td>
		                <td><?php echo $blog['author']; ?></td>
						<td><?php echo $blog['photo_link']; ?></td>
						<td>
							<?php echo
							'<form method="post" action="update_blog.php">
								<input type="hidden" name="blog_id" value="'.$blog['blog_id'].'">
								<button class="btn btn-primary" type="submit"> Update </button>
							</form>';
							?>
					 	</td>
						<td>
							<?php echo
							'<form method="post" action="delblog_db.php">
								<input type="hidden" name="blog_id" value="'.$blog['blog_id'].'">
								<input type="hidden" name="blog_name" value="'.$blog['title'].'">
								<button class="btn btn-danger" type="submit"> Delete </button>
							</form>';
							?>
					 	</td>
						<td><?php echo $blog['content']; ?></td>
		            </tr>

					<?php
					}
					$pdo = null;
					?>


		        </tbody>

		    	</table>

		</div>
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
		$(document).ready( function () {
			$('#blogs').DataTable();
		} );
		</script>

		<!-- for datatables -->
	   	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	  	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	  	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	  	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	  	<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js" ></script>

</body>
</html>
