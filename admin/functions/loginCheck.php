<?php 

session_start();

include 'connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']); // 202cb962ac59075b964b07152d234b70

$select = "SELECT * FROM users 
			WHERE username = '$username'
				AND
				password = '$password'
";

$query = $conn -> query($select);


if ($query -> num_rows > 0 ) {

	// session for the logged user

	$user = $query -> fetch_assoc();
	$id = $user['id'];

	$_SESSION['login'] = $id ;

	header("location: ../index.php");

} else {

	$_SESSION['error'] = '<div class="alert alert-danger">wrong credentials</div>';

	header("location: ../login.php");
}