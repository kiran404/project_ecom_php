<?php 
require "sliderextract.php";
require "servicextract.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" type="image/png" href="images/title-img.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<!--    fontawesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/library/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="asset/css/import.css">
    <link rel="stylesheet" type="text/css" href="asset/css/aos.css">
    <link rel="stylesheet" type="text/css" href="asses/css/animate.css">
    <link rel="stylesheet" type="text/css" href="asset/library/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="asset/library/fancybox/jquery.fancybox.css">
    <script src="asset/js/jquery-2.2.2.min.js"></script>
    <script src="asset/js/jqueryv1.11.0.min.js"></script>
    <script src="asset/js/jquery.counterup.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js" integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM=" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Kings School</title>
  </head>
  <body>    
    
    <!-- navbar -->
     <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">

        <a href="index.php" class="navbar-brand"><i class="fas fa-school text-warning fa-2x"></i></a>
        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav"><span class="navbar-toggler-icon"></span></button>
        
        <div class="collapse navbar-collapse justify-content-between" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#">Home</a></li>

                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="admission.php">Admission</a></li>

                <li class="nav-item text-center dropdown" data-toggle="dropdown"><a class="nav-link text-light text-uppercase font-weight-bold px-3 dropdown-toggle" href="#">Projects</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Project 1</a>
                        <a class="dropdown-item" href="#">Project 2</a>
                        <a class="dropdown-item" href="#">Project 3</a>
                        <a class="dropdown-item" href="#">Project 4</a>
                    </div>
                </li>
                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="notice.php">Notices</a></li>

                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="gallery.php">Gallery</a></li>

                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#">Extra-Curricular</a></li>
                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="admin/adminss.php">Admin Login</a></li>
            </ul>
         </div>

     </nav>
     <!-- end of navbar -->
     <section class="slider mainslider">
    <ul class="bxslider">
        <?php foreach($data as $d){ ?>
                <li>
                    <img src="upload/<?php echo $d['image'] ?>" width="100%" alt="" class="img-responsive imgback1">
                    <div class="bx-caption">
                            <div class="home_subtitle"><?php echo $d['title'] ?></div>
                                              
                    </div>
                </li>
            <?php } ?>
    </ul>
</section>


<br/>
<section class="services">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<h2>Our Services</h2>
			</div>
            <?php foreach($data2 as $d) { ?>
			<div class="col-md-4" style="margin-top:50px;">
				<div class="serviceinfo">
					<div class="service_icon"style="margin-left:50px;">
						<img src="ServiceImage/<?php echo $d['image']; ?>" height="100%" >
					</div>
					<div class="explanation">
						<h3>Library</h3>
						<p> <?php echo $d['description']; ?></p>
					</div>
				</div>
			</div>
        <?php } ?>
		</div>
	</div>
</section>

<section id="mid-body" style="width: 100%">
    <div id="description" style="width: 74%; float: left; margin-top: 30px;">
        <img src="assets/images/ppl.jpg" align="left"; style="margin: 20px 20px 20px 20px; padding-left: 9px;">
        <article style="text-align: justify; padding: 30px 30px;">
            Emboldened by our success with King's College and King's University, we are embarking on a journey of starting
            schools for younger children. Having gone through the painful experience of finding good school for our children, we begin our
            journey with a vision that children and their parents in Nepal do not have to look beyond their city of residence to find a good school.<br/>

            Our mission is to operate at least one Ace School in every city in Nepal and inspire and support other education entrepreneurs to bring
            about continual improvement in our schools and our school education systems.
            Our mission is to operate at least one Ace School in every city in Nepal and inspire and support other education entrepreneurs to bring
            about continual improvement in our schools and our school education systems.<br/>

            Our journey begins with Ace School Kathmandu with the objective of providing learning environment that enables our children to
            develop key competencies that prepare them well for challenges and opportunities that the modern-day world offers.<br/>
            <br/>
             <cite>
                King's King <br/>
                Chairman
            </cite>

        </article>
           
    </div>

    <div id="notice-body" style="width: 25%; float: left; text-align: center; vertical-align: center;">
        <section class="aboutus " >
    <div class="about_us"  >
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="display: bl">
                    <div class="notice">
                        <h2>Notices</h2>
                    </div>
                         <div class="scrollbar" id="style-5">
                            <div class="first_notice">
                                <small>Date:2018-02-23</small>
                                <p>Students of suncity apartment to board the bus from Pepsicola Chowk or Mahara Bridge</p>
                            </div>
                            <div class="first_notice">
                                <small>Date:2018-02-23</small>
                                <p>Students of suncity apartment to board the bus from Pepsicola Chowk or Mahara Bridge</p>
                            </div>
                            <div class="first_notice">
                                <small>Date:2018-02-23</small>
                                <p>Students of suncity apartment to board the bus from Pepsicola Chowk or Mahara Bridge</p>
                            </div>
                            <div class="force-overflow"></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</section>





  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rLQihCFPSNPkwLNBTbVZHUAnYc5iRYaWz9em+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
  <script src="assets/js/jquery-2.2.2.min.js"></script> 
<script src="assets/library/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/library/bxslider/jquery.bxslider.min.js"></script>
  
<script>
    $(document).ready(function(){
      $('.bxslider').bxSlider({
        auto:true
      });
    });
</script>
<script src="asset/library/bootstrap/js/bootstrap.js"></script>
<script src="asset/library/bxslider/jquery.bxslider.js"></script>
<script src="asset/library/fancybox/jquery.fancybox.js"></script>

<script src="asset/js/viewport.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="asset/js/main.js"></script>
</html>