<?php 


if ($_SERVER['REQUEST_METHOD'] != "POST") {
	header("location: ../users.php");
	exit();
}


$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$address = $_POST['address'];
$gender = $_POST['gender'];
$priv = $_POST['priv'];

include 'connect.php';

$insert = "INSERT INTO users (username , password , email ,address , gender , priv) VALUES ('$username' , '$password' , '$email' ,'$address' , '$gender' , '$priv')";

$query = $conn -> query($insert);

if ($query) {

	header("location: ../users.php");

} else {

	echo $conn -> error ;

}