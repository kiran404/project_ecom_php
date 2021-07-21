
<?php

$conn = mysqli_connect('localhost','root','','school_db');

  $errusername=$errpassword='';
  if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  if(empty($username)){
  $errusername="**Username is Blank";
}
  else{
  //echo $username;
}
  if(empty($password)){
  $errpassword="**Password is Blank";
}
  else{
  //echo $password;
}
$msg = "";
  $sql = "SELECT * FROM admin_login_tbl WHERE username = '$username' 
      AND password = '$password' ";

        
      $res = mysqli_query($conn, $sql);
      $count= mysqli_num_rows($res);
      if($count==1){
        header('location: ../dashboard.php');
      }
      else{
        echo  "incorrect username or password";
      }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="adminlogins.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">    
</head>
<body>
	<div class="loginbox">

		<img class="user" src="loginassets/user.png">
		<h3>sign in here</h3>
<form  method="POST" action= "<?php echo $_SERVER['PHP_SELF']?>"enctype="multipart/form-data">
        <div class="inputbox">
          
        	<input type="text" name="username" id="username" placeholder="username">
                 <span> <i class="fas fa-user"></i> </span>
                 <div class="error"><?php echo "$errusername"; ?></div>
             </div>
             <div class="inputbox">
        	<input type="password" name="password" id="password" placeholder="password">
             <span> <i class="fas fa-lock"></i> </span>
             <div class="error"><?php echo "$errpassword"; ?></div>
             </div>
     	    <input type="submit"name="submit"id="submit"value="login"> 

</form>
      <a href="#">forget password</a> 

	</div>
</body>
</html>