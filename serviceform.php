<?php 
$uploadOk = 1;
if (isset($_POST['btnUpload'])) {
	$err = [];
	#####################################################################################
	if(isset($_POST['desc']) && !empty($_POST['desc'])){
		$desc = $_POST['desc'];
	}else{
		$err['desc'] = 'Enter description.';
	}
	#####################################################################################
	$target_dir = "ServiceImage/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["upload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$file = basename( $_FILES["upload"]["name"]);
	#####################################################################################
	
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
		if(!empty($file) && !empty($desc) && ($uploadOk == 1)){
		$sql = "INSERT INTO ourservice_tbl (image,description) 
		VALUES ('$file','$desc')";
		if (mysqli_query($link, $sql)) {
			//echo 'New record created successfully';
		}else{
			echo 'Error: '.$sql.'<br/>'.mysqli_error($link);
		}
	}
		
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
	<div align="center">
	<h1>File Upload</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" 
		enctype="multipart/form-data">
		<table>
			<tr>
				<th>
					<label for="upload">Select file to upload</label>
				</th>
				<td>
					<input type="file" name="upload" id="upload"/>
					<span><?php if (isset($err['upload'])) { echo $err['upload']; } ?>
					</span>
				</td>
			</tr>
			<tr>
				<th>
					<label for="title">description</label>
				</th>
				<td>
					<textarea name="desc"></textarea>
				<!-- 	<input type="text" name="title" id="title" 
					placeholder="Enter Title of this file.">
 -->					<span><?php if (isset($err['desc'])) { echo $err['desc'];} ?>
					</span>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="btnUpload" value="Upload a file">
				</td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>