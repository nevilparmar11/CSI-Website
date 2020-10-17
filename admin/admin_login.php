<html lang="en">
<head>
  <title>CSI Admin | Login</title>
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

		<?php

			session_start();

			if(isset($_SESSION['user']))
			{
				header('Location: admin_dashboard.php');
				die();
			}
			else if(isset($_POST['name']) && isset($_POST['pass']))
			{
				$username = $_POST['name'];
				$password = $_POST['pass'];

				include("../db_connect.php");
				$stmt = $pdo->prepare("SELECT username, password FROM user_master WHERE username=? AND password=?");
				$stmt->execute([$username,$password]);
				$user_exists = $stmt->fetchColumn();

				if(!$user_exists)
				{
					header('Location:admin_login.php?msg=invalid_cred');
					session_close();
					$pdo = null;
					die();
				}
				else {
					$_SESSION['user'] = $username;
					$pdo = null;
					header('Location: admin_dashboard.php');
					die();
				}

			}


		?>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand">CSI Admin</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
		  			<li class="nav-item">
						<a class="navbar-link">Login</a>
		  			</li>
				</ul>
			</div>
		</nav>

		<section class="container site-section">
			<h1 class="text-center text-primary mt-5 mb-4"> Admin Login </h1>
		</section>

		<div id="notification">
			<?php
			 	if(isset($_GET['msg']))
				{
					if($_GET['msg']=="unauth")
					{
						echo '<div class="alert alert-danger text-center">
  						<strong> Unauthorized Access! </strong> Please login first.
 						</div>';
					}
					else if($_GET['msg']=="invalid_cred")
					{
						echo '<div class="alert alert-danger text-center">
  						<strong> Invalid Credentials </strong> contact admin in case you forgot credentials.
 						</div>';
					}
					else if($_GET['msg']=="logout")
					{
						echo '<div class="alert alert-success text-center">
  						<strong> Success! </strong> You logged out successfully.
 						</div>';
					}
				}
			?>
		</div>

		<form class="site-section row justify-content-center" method="post" action="<?php $_PHP_SELF ?>">
		<div class="col-md-4 mr-4 ml-4">
		  <div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" class="form-control" id="username" placeholder="Your Username" name="name" required>
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" placeholder="Your Secret Password" name="pass" required>
		  </div>
		  <button type="submit" class="btn btn-primary mt-2">Submit</button>
	  	</div>
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

</body>
</html>
