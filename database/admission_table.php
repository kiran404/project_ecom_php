<?php
	$servername = "localhost";
	$username = "root" ;
	$password  = "";
	$dbname = "school_db";
	//create connection
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	//Check connection
	if(!$conn){
		die("Connection failed: ");
	}
	//sql to create table
	$sql = "CREATE TABLE admission_tbl (
	Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	FirstName VARCHAR(30) NOT NULL,
	LastName VARCHAR(30) NOT NULL,
	Phone VARCHAR(15) NOT NULL,
	LocalAddress VARCHAR(30) NOT NULL,
	PermanentAddress VARCHAR(30) NOT NULL,
	Gender VARCHAR(30) NOT NULL,
	GuardianName VARCHAR(30) NOT NULL,
	GuardianPhone VARCHAR(15) NOT NULL,
	LocalGuardianName VARCHAR(30) NOT NULL,
	LocalGuardianPhone VARCHAR(15) NOT NULL,
	Grade VARCHAR(30) NOT NULL,
	reg_date TIMESTAMP
	)";
	if(mysqli_query($conn,$sql)){
		echo "Table info created successfully";
	}
	else {
		echo "Error creating table".mysqli_error($conn);
	}
	mysqli_close($conn);
?>