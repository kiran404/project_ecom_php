<?php
	$servername = "localhost";
	$username = "root" ;
	$password  = "";
	//create connection
	$conn = mysqli_connect($servername,$username,$password);
	//Check connection
	if(!$conn){
		die("Connection failed: ");
	}
	//Create Database
	$sql = "CREATE DATABASE school_db";
	if(mysqli_query($conn,$sql)){
		echo "Database created successfully";
	}
	else{
		echo "Error creating database".mysqli_error($conn);
	}
	mysqli_close($conn);
?>