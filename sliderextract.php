<?php
// require "select.php";
		$servername = 'localhost';
		$username = 'root';
		$password  = '';
		$dbname = 'school_db';
		// Create connection
		$link = mysqli_connect($servername,$username,$password,$dbname);
		//Check connection
		if (!$link) {
			die('Connection failed:'. mysqli_connect_error());
		}
		
		$sql = "select * from sliderimage_tbl";
		$result = mysqli_query($link,$sql);
		$data = [];
		if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		//echo $row['id'].$row['first_name'].$row['last_name'].'<br/>';
		array_unshift($data, $row);
	}
}
?>
