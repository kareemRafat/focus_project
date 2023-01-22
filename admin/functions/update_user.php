<?php 


$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$priv = $_POST['priv'];

include 'connect.php';

// password
if (!empty($_POST['password'])) {
	$pass = $_POST['password'];

	$updatePass = "UPDATE users SET password = md5('$pass') WHERE id = $id";
	$queryPass = $conn -> query($updatePass);

}



$update = "UPDATE users SET 
			
			username = '$username' ,
			email = '$email' ,
			address = '$address' ,
			gender = '$gender' ,
			priv = '$priv'
		WHERE id = $id

";

if ($conn -> query($update)) {

	header("location: ../users.php");

}else {

	echo $conn -> error ;
}