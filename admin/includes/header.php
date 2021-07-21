<!--  <?php
session_start();
if(!isset($_SESSION["name"])){
    header('location: adminss.php');  //location ---> register.php
}
$conn = mysqli_connect('localhost','root','','school_db');
$sql = "SELECT * FROM admin_login_tbl";
$res = mysqli_query($conn,$sql);//execute the query

$data = [];
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        array_unshift($data, $row);
    }
}
?>  -->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kings' School</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">