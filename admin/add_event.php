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
			<h1 class="text-center text-primary mt-5 mb-4"> Add Event</h1>
		</section>


		<div id="notification">
			<?php
			 	if(isset($_GET['msg']))
				{
					if($_GET['msg']=="success")
					{
						echo '<div class="alert alert-success text-center">
	  					<strong>Success!</strong> Event added successfully.
						</div>';
					}
					else if($_GET['msg']=="updated")
					{
						echo '<div class="alert alert-success text-center">
	  					<strong>Success!</strong> Event updated successfully.
						</div>';
					}
					else if($_GET['msg']=="error")
					{
						echo '<div class="alert alert-danger text-center">
  						<strong>Oops!</strong> An error occured while adding event to database. Contact admin.
						</div>';
					}
					else if($_GET['msg']=="event_empty")
					{
						echo '<div class="alert alert-warning text-center">
  						<strong>Hello,</strong> Please fill the event form first.
						</div>';
					}
					else if($_GET['msg']=="error_photo")
					{
						echo '<div class="alert alert-danger text-center">
  						<strong>Oops!</strong> Error uploading photo for the event. Contact admin or try uploading again.
						</div>';
					}
				}
			?>
		</div>

		<form class="container site-section mt-4 mb-5" method="post" action="addevent_db.php" enctype="multipart/form-data">

		  <div class="form-group">
		    <label for="event_name">Event Name</label>
		    <input type="text" class="form-control" id="event_name" placeholder="Event Name" name="name" required>
		    <small id="event_name_help" class="form-text text-muted">Do NOT include workshop/seminar/competition in event name.</small>
		  </div>

		  <div class="form-group">
		    <label for="event_type">Event Type</label>
		    <select class="form-control" id="event_type" name="type" required>
		      <option>Seminar</option>
		      <option>Workshop</option>
		      <option>Competition</option>
		      <option>Knowledge Sharing Session</option>
			  <option>Felicific Event</option>
		      <option>Non-tech Event</option>
		      <option>Other</option>
		    </select>
		  </div>

		  <div class="form-group date">
			<label for="event_date">Event Date</label>
			<input type="date" class="form-control" id="event_date" name="date" required>
			<small id="event_date_help" class="form-text text-muted">In case of events spanning more than one day provide starting date or most cruicial date. Mention other details in event's description.</small>
		  </div>

		  <div class="form-group">
    		<label for="event_description">Event Description</label>
    		<textarea class="form-control" id="event_description" rows="4" name="description" required></textarea>
			<small id="event_description_help" class="form-text text-muted">Provide 300 words short brief about the event.</small>
  		  </div>

		  <label for="event_photo">Event Photo Upload</label>
		  <div class="form-group custom-file">
			<input type="file" class="custom-file-input" id="photo_link" name="photo_link" required>
			<label class="custom-file-label" id="event_photo_help" for="event_photo">Choose file</label>
			<small id="event_photo_help" class="form-text text-muted">Provide a high-resolution JPEG/JPG/PNG image only.</small>
		  </div>

		  <div class="form-group mt-5">
		    <label for="event_blog_link">Event Blog Link</label>
		    <input type="text" class="form-control" id="event_blog_link" placeholder="Event Blog Link" name="blog_link">
		    <small id="event_blog_link_help" class="form-text text-muted">Provide a valid resolved URL for the blog corrsponding to this event. Leave blank otherwise.</small>
		  </div>

		  <button type="submit" class="btn btn-primary mt-2">Submit</button>
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
			  $(this).siblings("#event_photo_help").addClass("selected").text(fileName);
			});
		</script>
</body>
</html>
