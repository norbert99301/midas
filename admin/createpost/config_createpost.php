<?php
include '../config.php';
if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$category = $_POST['category'];
	$details = $_POST['details'];
	$location = $_POST['location'];
	$price = $_POST['price'];
	$date = $_POST['date'];
	// $image = $_POST['uploadfile'];
	$status = "Available";
	
        $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "uploadd/".$filename;


	 if (isset($_POST["submit"])) {
	if (empty($title) || empty($category) || empty($details) || empty($location) || empty($price) || empty($date) || empty($filename)) {
		header("location:".base_url."admin/createpost/?error=empty");
           exit();
	}
	else {
		 if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  echo $msg;
		$query = mysqli_query($con, "INSERT INTO all_items (name, description, image, price, category, location, status) VALUES ('$title', '$details', '$filename', '$price', '$category', '$location', '$status') ");
        header("location:".base_url."admin/dashboard/?status=success");
        exit();
}}
}









?>