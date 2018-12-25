<?php

	mysql_connect('localhost','root');
	mysql_select_db('blood_donation');

$name = $_POST['name'];
$pass = $_POST['password'];
$phn = $_POST['phone'];
$mail = $_POST['email'];
$bdgroup = $_POST['bloodgroup'];
$city = $_POST['city'];

$contactfound = mysql_query("SELECT * FROM donar WHERE contact ='$phn' ");
$emailfound = mysql_query("SELECT * FROM donar WHERE email ='$mail' ");

$contfound = mysql_num_rows($contactfound);
$efound = mysql_num_rows($emailfound);

if(($contfound || $emailfound) == 1){
    echo "THIS Name OR Contact Number OR EMAIL already EXISTS !! TRY OTHER. Thank YOU";
} else{
    if()
}
