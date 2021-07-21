<?php

$id = $_GET['id'];
// connect database
$conn = mysqli_connect('localhost','root','','school_db');
//query to delete record from tbl_cateory with id
$sql = "DELETE FROM admission_tbl
		WHERE id = $id  ";
// execute query
mysqli_query($conn,$sql);
//redirect to listing page
header('location:table.php');
?>