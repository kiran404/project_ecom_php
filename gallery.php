<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" type="image/png" href="images/title-img.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<!--    fontawesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/library/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lightbox.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/gallery.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Schools' Gallery</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">

        <a href="index.html" class="navbar-brand"><i class="fas fa-school text-warning fa-2x"></i></a>
        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav"><span class="navbar-toggler-icon"></span></button>
        
        <div class="collapse navbar-collapse justify-content-between" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="index.html">Home</a></li>

                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#">Admission</a></li>

                <li class="nav-item text-center dropdown" data-toggle="dropdown"><a class="nav-link text-light text-uppercase font-weight-bold px-3 dropdown-toggle" href="#">Projects</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Project 1</a>
                        <a class="dropdown-item" href="#">Project 2</a>
                        <a class="dropdown-item" href="#">Project 3</a>
                        <a class="dropdown-item" href="#">Project 4</a>
                    </div>
                </li>
                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="notice.php">Notices</a></li>

                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#">Gallery</a></li>

                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="#">Extra-Curricular</a></li>
                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="admin/dashboard.php">Admin Login</a></li>
            </ul>

            <form class="form-inline ml-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="button" class="btn"><i class="fas fa-search text-muted"></i></button>
                    </div>
                </div>
            </form>
         </div>

     </nav>
     <!-- end of navbar -->
     <br><br><br>
     
     <marquee style="background-color: rgba(220,100,150,.5);">We Never Forget When Learning Is Fun </marquee>
<h1> Gallery </h1>
<div class="gallery">

    <a href="images/l.jpg" data-lightbox="myGallery" data-title="Grade - 5"> <img src="images/l.jpg"/> </a>
    <a href="images/k.jpg" data-lightbox="myGallery" data-title="Grade - 4" > <img src="images/k.jpg" />  </a>
    <a href="images/j.jpg" data-lightbox="myGallery" data-title="Grade - 2" > <img src="images/j.jpg" />  </a>

    <a href="images/a2.jpg" data-lightbox="myGallery" data-title="Grade - 12" > <img src="images/a2.jpg" />  </a>
    <a href="images/b2.jpg" data-lightbox="myGallery" data-title="Grade - 12" >  <img src="images/b2.jpg" /> </a>
    <a href="images/c2.jpg" data-lightbox="myGallery" data-title="Grade - 10" > <img src="images/c2.jpg" />  </a>

    <a href="images/d2.jpg" data-lightbox="myGallery" data-title="Grade - 8"> <img src="images/d2.jpg"/> </a>
    <a href="images/e2.jpg" data-lightbox="myGallery" data-title="Grade - 7" > <img src="images/e2.jpg" /> </a>
    <a href="images/f1.jpg" data-lightbox="myGallery" data-title="Grade - 7" > <img src="images/f1.jpg" />  </a>


</div>
</body>
 <script src="assets/js/jquery-2.2.2.min.js"></script> 
<script src="assets/library/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/library/bxslider/jquery.bxslider.min.js"></script>
  <script src="assets/js/lightbox-plus-jquery.js"></script>
<script>
    $(document).ready(function(){
      $('.bxslider').bxSlider({
        auto:true
      });
    });
</script>
</html>