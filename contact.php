<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149357556-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149357556-1');
</script>

  <title>CSI DDU | Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">


	
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<?php
		if(isset($_POST["form_resp"]))
		{
				include("db_connect.php");
				$sql = "INSERT INTO tbl_contact_res (name,email,subject,msg) VALUES (?,?,?,?)";
			$stmt= $pdo->prepare($sql);
			$stmt->execute([$_POST["name"], $_POST["email"],$_POST["subject"],$_POST["msg"] ]);
							
			function sanitize_my_email($field) 
			{
				$field = filter_var($field, FILTER_SANITIZE_EMAIL);
				if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
					return true;
				} else {
					return false;
				}
			}
			
			$to_email = $_POST["email"];
			$subject = 'New CSI Web Contact form Response';
			$message = 'Name : ' . $_POST["name"] . '\nEmail : ' . $_POST["email"] . '\nSubject : ' . $_POST["subject"] . '\nMessage : ' . $_POST["msg"] . "\n\nRESPONSE OVER\nGENERATED AUTOMATICALLY BY WEB FORM AT CSI DDU WEBSITE.\n DO NOT REPLY TO THIS." ;
			
			//check if the email address is invalid $secure_check
			$secure_check = sanitize_my_email($to_email);
			if ($secure_check == true)
			{
				
				//mail($to_email, $subject, $message, $headers);
				echo '<script>
					swal("Mail Sent", "We will get back to you soon!", "success");
				</script>';
			}
			$pdo=null;
		}
	?>

  

  <div class="site-wrap">

    <?php include("header.php"); ?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/header_background.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">


          <div class="col-md-12 mt-lg-5 text-center">
            <h1 class="mb-4">Get In Touch</h1>
            <p class="desc mb-4">Have a question about linear regression? <br>Build a amazing app and want to show it?<br>Or you just want to talk? We love discussing new ideas!</p>

			<a href="#contact_form" class="btn  btn-primary mr-2 mb-2 mt-3">Fill the form below</a>

          </div>

        </div>
      </div>
    </div>



    <section class="container">
    	<div class="row mt-5 mb-5">
			<div class="col-md-4 text-center">
				<p class="mb-4">
			  		<span class="icon-room d-block h2 text-primary"></span>
			  		<a href="#">DDU CSI Student Branch,<br>C/o Dharmsinh Desai University, Nadiad.</a>
				</p>
	  		</div>
	  		<div class="col-md-4 text-center">
				<p class="mb-4">
		  			<span class="icon-phone d-block h2 text-primary"></span>
		  			<a href="#"> Priyavarddhan Panchal : +91 97248 10243 <br>Hetvi Purohit : +91 94284 04192</a>
				</p>
	  		</div>
	  		<div class="col-md-4 text-center">
				<p class="mb-0">
		  			<span class="icon-mail_outline d-block h2 text-primary"></span>
		  			<a href="#">csiddu2020@gmail.com
</a>
				</p>
	  		</div>
		</div>

		<!-- form starts -->
		<div class="row justify-content-center" id="contact_form">
	  		<div class="col-md-8 mb-1">
				<form action="contact.php" method="post" class="p-5 bg-white">

					<h2 class="h4 text-black mb-5">We always love to hear from you!</h2>
					<input type="hidden" name="form_resp" value="1">
					<div class="row form-group">
						<div class="col-md-12 mb-3">
						  <label class="text-black" for="name">Full Name</label>
						  <input type="text" id="name" name="name" class="form-control">
						</div>

					</div>

					<div class="row form-group">
						<div class="col-md-12">
						  <label class="text-black" for="email">Email</label>
						  <input type="email" id="email" name="email" class="form-control">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
						  <label class="text-black" for="subject">Subject</label>
						  <input type="subject" id="subject" name="subject" class="form-control">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
						  <label class="text-black" for="message">Message</label>
						  <textarea id="message" cols="30" rows="7" name="msg" class="form-control" placeholder="Write your notes or questions here..."></textarea>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
						  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
						</div>
					</div>
				</form>
	  		</div>
		</div>
	</section>
	
  <?php include("footer.php"); ?>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
	
	

  <script src="js/main.js"></script>


</body>

</html>
