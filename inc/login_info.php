<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'blood_donation');

$email = $_POST['email'];
$pass = $_POST['password'];

$data =  mysqli_query("SELECT * FROM donar where email = '$email' and username = '$pass'");

$found = mysqli_num_rows($data);

$sess = mysqli_fetch_array($data);

if($found == 0){

 	/*$_SESSION['name'] = $sess['name']; 
 	$_SESSION['username'] = $sess['username'];
    $_SESSION['phone'] = $sess['phone'];
    $_SESSION['email'] = $sess['email'];
 	$_SESSION['bdgroup'] = $sess['bloodgroup'];
 	$_SESSION['city'] = $sess['city'];*/
    
echo $_SESSION['name'];
 	//header("location: ../profile.php");
 } else{
    
 	header("location: ../WrongLogIn.php");
 }



?>