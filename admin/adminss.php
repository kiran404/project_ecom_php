<?php
session_start();
$msg = ' ';
$conn = mysqli_connect('localhost','root','','school_db') or die('Unable To Connect');

  $errusername=$errpassword='';
  if(count($_POST)>0){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql = "SELECT * FROM admin_login_tbl WHERE username = '$username' 
      AND password = '$password' ";

        
      $res = mysqli_query($conn, $sql);
      $row= mysqli_fetch_array($res);
      if(is_array($row)){
        // header('Location:dashboard.php');
         //echo "success";
        // header('location:dashboard.php');
        // echo "$sql";
        // echo "<script> window.open('dashboard.php','_SELF'); </script>";
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['username'];
      }
      else{
        $msg =  "incorrect username or password";
        // header('Location:dashboard.php');
      }
    }
      if (isset($_SESSION['name'])) {
        header("Location:dashboard.php");
      }
?>
<?php  
$errusername=$errpassword=' ';
  if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
 if(empty($username)){
  $errusername="**Username is Blank";
}
  if(empty($password)){
  $errpassword="**Password is Blank";
}
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="adminlogins.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">    
</head>
<body>
	<div class="loginbox">

		<img class="user" src="loginassets/user.png">
		<h3>sign in here</h3>
<form  method="POST" action= ""enctype="multipart/form-data">
        <div class="inputbox">
          <div class="error"><?php echo "$msg"; ?></div>
          <br>
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