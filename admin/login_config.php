<?php
session_start();
include 'config.php';
if (isset($_POST["submit"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$db_password = md5($password);

  if (isset($_POST["submit"])) {
   }
	if (empty($username) || empty($db_password)) {
		echo "please provide username and password";
		 header("location:". base_url."admin/?status=empty");
    exit();
	}
	else {
		$select = mysqli_query($con, "SELECT * FROM admin WHERE username = '$username' AND password = '$db_password'");
		$data = mysqli_fetch_assoc($select);
print_r($data);
           
     if (mysqli_num_rows($select) > 0) {
     $_SESSION['name'] = $username;
     	 // echo $name;
     header("location:". base_url."admin/dashboard");
    exit();
	}
	else {
		echo "incorrect username or password";
	}
}
}
// $pass = md5("midcondeals1");
// echo $pass;
$pass = md5("genesis99");
echo $pass;
 
?>