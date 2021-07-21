<?php
session_start();
require 'database/connect.php';
if(isset($_POST['registerbtn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
}

$query = "INSERT INTO admin_login_tbl (username,password) VALUES ('$username','$password')";
$query_run = mysqli_query($conn,$query);
if($query_run){
    // echo "saved;
    $_SESSION['success'] = "Admin Prifile Added";
    header('Location: register.php');
}else{
    $_SESSION['status'] = "Admin Profile Not Added";
    header('Location: register.php');
}

?>