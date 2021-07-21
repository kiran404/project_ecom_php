<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
<?php  
if($_SESSION["name"]){  
?>
<h1>Welcome</h1>
<?php echo $_SESSION["name"]; ?>. Click here to <a href="adminlogin.php" title=" Admin Log Out">Log Out</a>.
<?php 
}else{
	echo '<a href="adminlogin.php"><h1>Please login First. </h1></a>';
} 
?>
</body>
</html>