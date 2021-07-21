<?php
$conn = mysqli_connect('localhost','root','');   //$link // create connection
if(!$conn){    //check connection  // if connection not established
	die("Connection Failed...".mysqli_connect_error());
}
$sql = "CREATE DATABASE school_db";  //create database
if(mysqli_query($conn,$sql)){
	echo "Database created successfully";
}else{
	echo "Error creating database: ".mysqli_error($conn);
}
mysqli_close($conn);

?>