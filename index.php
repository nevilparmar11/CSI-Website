<!doctype html>
<html lang="en">
  <head>
	<title>CSI DDU Student Branch</title>
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

  

  <div class="site-wrap">

  	<?php include("header.php"); ?>

	<div class="site-blocks-cover overlay" style="background-image: url(images/header_background.jpg);" data-aos="fade" id="home-section">

		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-10 mt-lg-5 text-center">

					<h1>CSI DDU Student Branch</h1>
					<p class="mb-5 desc"  data-aos="fade-up"> We envisions a dream where everyone is provided a opportunity to expand their horizons of knowledge. </p>
					<a href="contact.php" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>

				</div>
			</div>
		</div>

		<a href="#next" class="mouse smoothscroll">
			<span class="mouse-icon">
			  <span class="mouse-wheel"></span>
			</span>
		</a>

	</div>


	<!-- header part over  -->

	<!-- main content starts from here -->

	<!-- what we are section -->
	<div class="cta-big-image" id="about-section">
	  	<div class="container">
			<div class="row mt-5 mb-5 pt-5 pb-3 justify-content-center">
		  		<div class="col-md-10 text-center">
			  		<h2 class="section-title mb-4" data-aos="fade-up" data-aos-delay="">What We Are?</h2>
					<p class="lead mr-2 ml-2" data-aos="fade-up" data-aos-delay="100">We are a student chapter of computer society of India, which is the frist and largest body of computer professionals. We bridge the gap between students and industry. we fill the gap by sharing knowledge through seminars, workshops, and competiitons. We love to craft creative solutions for the real-life problems. Enhancing technical skills of the students is our main vision and we hope to continue this service for as long as we can. </p>
		  		</div>
			</div>
		</div>
	</div>

	 <div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-md-10 text-center">
				<h2 class="section-title mb-4" data-aos="fade-up" data-aos-delay="">What We do?</h2>
				<p class="lead mr-2 ml-2" data-aos="fade-up" data-aos-delay="100">We Share Knowledge, Experience and Expertise.</p>
			</div>
	</div>


		<div class="row mb-5">
		  <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
			<img src="images/event_icon.png" alt="Events" class="img-fluid w-25 mb-4">
			<h3 class="card-title text-primary">Events</h3>
	    </div>

		  <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
			<img src="images/workshop_icon.png" alt="Workshops" class="img-fluid w-25 mb-4">
			<h3 class="card-title text-primary">Workshops</h3>
	    </div>

		  <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
			<img src="images/seminar_icon.png" alt="Seminars" class="img-fluid w-25 mb-4">
			<h3 class="card-title text-primary">Seminars</h3>
	    </div>

		</div>
	  </div>
  </div>


	  <section class="site-section" id="blog-section">
		<div class="container">
		  <div class="row mb-5">
			<div class="col-12 text-center" data-aos="fade">
			  <h2 class="section-title mb-3">Our Recent Events</h2>
			</div>
		  </div>

		  <div class="row">

			<?php
  			include("db_connect.php");
  			$sql = "SELECT * from Event_master ORDER BY date DESC LIMIT 3";
  			$event_list = $pdo->query($sql)->fetchAll();
  			// now $event variable has list of events
  			foreach($event_list as $event){
  			?>

			<div class="col-md-6 col-lg-4 mb-2 mb-lg-4" data-aos="fade-up">
			  <div class="h-entry">
				<a href="<?php echo $event['blog_link']; ?>">
				  <img src="<?php echo $event['photo_link']; ?>" alt="Recent CSI event photo" class="img-fluid rounded">
				</a>
				<h2 class="font-size-regular"><?php echo $event['name']; ?></a></h2>
				<div class="meta mb-4"><?php echo date("jS M, Y", strtotime($event['date'])); ?><span class="mx-2">&bullet;</span><?php echo $event['type']; ?></div>
				<p class="text-truncate"><?php echo $event['description']; ?></p>
				<p><a href="events.php">Continue Reading...</a></p>
			  </div>
			</div>

			<?php
			}
			$pdo = null;
			?>
		  </div>
		</div>
	  </section>

	<section class="bg-light" id="faq-section">
	  <div class="container">
		<div class="row pt-5">
		  <div class="col-12 text-center" data-aos="fade">
			<h2 class="section-title">Frequently Asked Questions</h2>
		  </div>
		</div>
		<div class="row mt-5">
		  <div class="col-lg-6">

			<div class="mb-5" data-aos="fade-up" data-aos-delay="100">
			<h3 class="text-black h4 mb-4">What is CSI all about?</h3>
			<p>Computer Society of India is the first and largest body of computer professionals in India. It was started by few computer professional and now has grown to be the national body representing computer professionals. In almost every university it runs its student chapter like we have CSI DDU Student Chapter.</p>
			</div>

			<div class="mb-5" data-aos="fade-up" data-aos-delay="100">
			  <h3 class="text-black h4 mb-4">How can I get CSI membership?</h3>
			  <p>To get CSI membership you need to fill a registration form and have to pay the membership fee and can get its membership card which can be yearly, two-yearly or for four years also.</p>
			</div>

		  </div>
		  <div class="col-lg-6">

			<div class="mb-5" data-aos="fade-up" data-aos-delay="100">
			  <h3 class="text-black h4 mb-4">Why should I take CSI membership?</h3>
			  <p>It becomes very helpful for any individual in future as it helps you to get various scholarships and also be very impactful in your resume. Since you are part of one of the prestigious and acknowledged body it also help you to grow your technical as well as non technical skills. One of the most important advantage is that you get certain benefits and concession in fess while participating in any event organised by CSI.</p>
			</div>


		  </div>
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
