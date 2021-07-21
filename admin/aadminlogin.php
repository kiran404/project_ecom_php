<?php
session_start();
$msg = "";
  if(count($_POST)>0){
     $conn = mysqli_connect('localhost','root','','school_db') or die('Unable to connect');
    $username = $_POST['username'];
    $password =$_POST['password'];

    $sql = "SELECT * FROM admin_login_tbl WHERE username = '$username' 
      AND password = '$password' ";

      $res = mysqli_query($conn, $sql);
      // $count= mysqli_num_rows($res);
      $row = mysqli_fetch_array($res);
      if(is_array($row)){
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['username'];
      }else{
        $msg = "*** Invalid Username or Password! ***";
      }
    }
    if(isset($_SESSION['id'])){
      header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
  <style type="text/css">
  .error{
    color:red;
    font-style:italic;
  } 
</style>
</head>
<body>
	<table border="1px">
	<form method="POST" action= "<?php echo $_SERVER['PHP_SELF']?>"enctype="multipart/form-data">
  <tr>
    <span class="err"><?php echo $msg; ?></span> <br/>
  	<th> username</th>
  	<td>
      <input type="text" name="username"id="username">

    </td>
  	
  <tr>
  	<th>password</th>
  	<td><input type="password" name="password" id="password"></td>
  </tr>
  <tr>
  	<td><input type="submit" name="submit" id="submit" value="Admin Login"></td>
    <td><a href="new_admin_signup.php"><input type="button" value="Sign Up"></a></td>
  </tr>
	</form>
</table>
</body>
</html>