<?php
	$errfName=$errlName=$errphone=$errAddress=$errAddress1=$errgname=$errphone1=$errlocname=$errphone2= $errgen = $errgrade = ' ';
	$Firstname=$Lastname=$phone=$Local=$Permanent=$Guardian=$GuardianPhone=$LocalGuardian=$LocalPhone = $gender = $grade = $msg = ' ';
	
	if(isset($_POST['submit'])){
		$Firstname=$_POST['fname'];
		$Lastname=$_POST['lname'];
		$phone=$_POST['phone'];
		$Local=$_POST['address'];
		$Permanent=$_POST['address1'];
		$Guardian=$_POST['gname'];
		$GuardianPhone=$_POST['phone1'];
		$LocalGuardian=$_POST['locname'];
		$LocalPhone=$_POST['phone2'];
		$gender=$_POST['gender'];
		$grade=$_POST['grade'];
		if(empty($Firstname)){
			$errfName="Name is blank";
		}
		echo "<br/>";
		if(empty($Lastname)){
			$errlName="Name is blank";
		}
		echo "<br/>";
		if(empty($phone)){
			$errphone="Number is blank";
		}
		else{
			if(is_numeric($phone)&&strlen($phone)==10){
			
			}
			else{
				$errphone="Enter valid 10 numbers";
			}
		}
		echo "<br/>";
		if(empty($Local)){
			$errAddress="Address is blank";
		}
		echo "<br/>";
		if(empty($Permanent)){
			$errAddress1="Address is blank";
		}
		echo "<br/>";
		if(empty($Guardian)){
			$errgname="Name is blank";
		}
		echo "<br/>";
		if(empty($GuardianPhone)){
			$errphone1="Number is blank";
		}
		else{
			if(is_numeric($GuardianPhone)&&strlen($GuardianPhone)==10){
			echo $GuardianPhone;
			}
			else{
				$errphone1="Enter valid 10 numbers";
			}
		}
		echo "<br/>";
		if(empty($LocalGuardian)){
			$errlocname="Name is blank";
		}
		echo "<br/>";
		if(empty($LocalPhone)){
			$errph="Number is blank";
		}
		else{
			if(is_numeric($LocalPhone)&&strlen($LocalPhone)==10){
			
			}
			else{
				$errgrade="Enter valid 10 numbers";
			}
		}
		if(strlen($gender)<1){
			$errgen="Gender is blank";
		}
		if(strlen($grade)<1){
			$errgrade="Number is blank";
		}
		$conn=mysqli_connect('localhost','root','','school_db');
//check connection
if(!$conn){
	die("Connection Failed..".mysqli_connect_error());
}
//SQL query
// $msg = "";
$sql="INSERT INTO admission_tbl
	(FirstName,LastName,Phone,LocalAddress,PermanentAddress,GuardianName,GuardianPhone,LocalGuardianName,LocalGuardianPhone)  /*  Multiple values insertion*/
	VALUES
	('$Firstname','$Lastname','$phone','$Local','$Permanent','$Guardian','$GuardianPhone','$LocalGuardian','LocalPhone')
";
if(mysqli_query($conn,$sql)){
	
	$msg = "Record created successfully";
}else{
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
	}
	
	
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
    <link rel="stylesheet" type="text/css" href="assets/css/admission.css">
    <style>
		.error{
			color:red;
			font-size: 15px;
		}
		body{
			background-color: rgba(230,140,50,.6);
		}
</style>
    <title>Kings School</title>
  </head>
  <body>    
<div style="">
    <!-- navbar -->
     <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">

        <a href="index.php" class="navbar-brand"><i class="fas fa-school text-warning fa-2x"></i></a>
        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav"><span class="navbar-toggler-icon"></span></button>
        
        <div class="collapse navbar-collapse justify-content-between" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item text-center"><a class="nav-link text-light text-uppercase font-weight-bold px-3" href="index.php">Home</a></li>

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
<br>
<marquee style="background-color: rgba(220,100,150,.5);">Limited Seats Available Hurry up.. </marquee>
<section style="margin: 40px 30px 30px 30px">
	<h1 align="center">Admission Now</h1>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
		<table id = "tb" cellspacing="2px" cellpadding="2px" border=0px align="center">
			<tr>
				<th>First Name:</th>
				<td><input type="text" name ="fname" id= "fname" placeholder="First Name">
					<span class = "error"><?php echo $errfName; ?></span> 
				</td>
			</tr>
			<tr>
				<th>Last Name:</th>
				<td><input type="text" name ="lname" id= "lname" placeholder="Last Name">
					<span class = "error"><?php echo $errlName; ?></span>
				</td>
			</tr>
			<tr>
				<th>Phone Number:</th>
				<td> <input type="text" name="phone" id="phone" placeholder="Phone Number">
					<span class = "error"><?php echo $errphone; ?></span>
				</td>
			</tr>
			<tr>
				<th>Local Address: </th>
				<td><input type="text" name="address" id="address">
					<span class = "error"><?php echo $errAddress; ?></span>
				</td>
			</tr>
			<tr>
				<th>Permanent Address:</th>
				<td><input type="text" name="address1" id="address1">
					<span class = "error"><?php echo $errAddress1; ?></span>
				</td>
			</tr>
			<tr>
				<th>Gender:</th>
				<td><input type="radio" name="gender" id="male" value="male">Male
					<input type="radio" name="gender" id="female" value="female">
					<span class = "error"><?php echo $errgen; ?></span>
				</td>
			</tr>
			<tr>
				<th>Guardian Name:</th>
				<td>
					<input type="text" name="gname" id="gname">
					<span class = "error"><?php echo $errgname; ?></span>
				</td>
			</tr>
			<tr>
				<th>Guardian's Phone:</th>
				<td>
					<input type="text" name="phone1" id="phone1" placeholder="Phone Number">
					<span class = "error"><?php echo $errphone1; ?></span>
				</td>
			</tr>
			<tr>
				<th>Local Guardian Name:</th>
				<td>
					<input type="text" name="locname" id="locname">
					<span class = "error"><?php echo $errlocname; ?></span>
				</td>
			</tr>
			<tr>
				<th>Local Guardian's Phone:</th>
				<td>
					<input type="text" name="phone2" id="phone2" placeholder="Phone Number">
					<span class = "error"><?php echo $errphone2; ?></span>
				</td>
			</tr>
			<tr>
				<th>Grade: </th>
				<td> <select name="grade" value="grade">
						<option>Choose Grade</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="">9</option>
					</select>
					<span class = "error"><?php echo $errgrade; ?></span>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2">
					<input type="submit" name="submit" id="submit" value="Send">
				</td>
			</tr>
		</table>
	</form>
	</section>

	<div class="text-white"><?php echo $msg; ?></div>
</div>
</body>
</html>
