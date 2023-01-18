<?php 

// echo "<pre>";
// print_r($_POST);

$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$priv = $_POST['priv'];

include 'connect.php';

$insert = "INSERT INTO users (username , email ,address , gender , priv) VALUES ('$username' , '$email' ,'$address' , '$gender' , '$priv')";

$query = $conn -> query($insert);

if ($query) {

	header("location: ../users.php");

} else {

	echo $conn -> error ;

}