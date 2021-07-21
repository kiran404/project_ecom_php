<?php
//create connection
$conn = mysqli_connect('localhost','root','','school_db');
//check connection
if(!$conn){   
	die("Connection Failed...".mysqli_connect_error());
}
//sql to create table
$sql = "CREATE TABLE sliderImgae_tbl(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(30) NOT NULL
	
)";
if(mysqli_query($conn,$sql)){
	echo "Table form created Successfully..";
}else{
	echo "Table form not created..".mysqli_error($conn);
}
mysqli_close($conn);
?>
