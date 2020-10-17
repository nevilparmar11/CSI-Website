<!doctype html>
<html lang="en">

<head>
  <title>CSI DDU | Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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
  <link rel="stylesheet" href="css/timeline.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
   <script>
            function show() {
                var x = document.getElementById("content");
                x.style.display = "block";
            }
            function hide() {
                var x = document.getElementById("content");
                x.style.display = "none";
            }


             
           


  </script>
  <style>
    #content {
                position: fixed;
                top: 25vh;
                left: 40vw;
                background-color:#06838C;
                height: 30vw;
                width: 30vw;
                padding: 2%;
                color: white;
                display: none;
                z-index:1;
                
            }
     #close{
                float: right;
            }
     #closebutton{
                z-index: 1;
                background-color: inherit;
                border: none;
                color:white;

            }
      #author
            {
              float:right;
            }

            
  </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


 <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> 


  <div class="site-wrap">

      <?php include("header.php"); ?>

  <div class="site-blocks-cover overlay" style="background-image: url(images/header_background.jpg);" data-aos="fade" id="home-section">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-10 mt-lg-5 text-center">

          <h1>CSI DDU Student Branch</h1>
          <p class="mb-5 desc"  data-aos="fade-up"> CSI Blogs Are Just For Making You More Knowledgable In Tech Fields</p>
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






  <section class="timeline">
    <div class="container">

    <?php

    include("db_connect.php");
    $sql = "SELECT * from blog_master ORDER BY date_published DESC LIMIT 10";
    $blog_list = $pdo->query($sql)->fetchAll();
    // now $event variable has list of events

    foreach($blog_list as $blog){
    ?>

      <div class="timeline-item">

        <div class="timeline-img"></div>

        <div class="timeline-content timeline-card">
          <div class="timeline-img-header" style="background-image: url(<?php echo $blog['photo_link']; ?>);">
            <h2><?php echo $blog['title']; ?></h2>
          </div>
          <div class="date"><?php echo date("jS M, Y", strtotime($blog['date_published'])); ?></div>
          
          <a class="bnt-more" href="#" onclick="show()">By <?php echo $blog['author']?></a>
        </div>

    
      <div id="content" >
            
      <br><div id="close"><button id="closebutton" onclick="hide()">&times;</button></div><br><br>
          <div class="timeline-img-header" style="background-image: url(<?php echo $blog['photo_link']; ?>);">
            <h2><?php echo $blog['title']; ?></h2>
          </div>
          <div class="date"><?php echo date("jS M, Y", strtotime($blog['date_published'])); ?></div>
          <p><?php echo $blog['content']; ?></p>
         <div id="author"> <p class="bnt-more"><b>-</b>By <?php echo $blog['author']?></p></div>
                
            
        </div>
      
      </div>


    <?php
    }
    $pdo = null;
    ?>
   
  </section>
<br>
<br>
</div>
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
