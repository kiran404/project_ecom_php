<?php 
$conn= mysqli_connect('localhost','root','','school_db');
if(!$conn){
	die("connection failed");
}
//create table
$sql="CREATE TABLE admin_login_tbl(
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL
)";
if(mysqli_query($conn,$sql)){
	echo "Table admin_login_tbl created successfully";
}
else{
	echo"Error creating table".mysqli_error($conn);
}
mysqli_close($conn);
?>