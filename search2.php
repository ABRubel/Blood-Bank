<?php


/*
   $con = mysqli_connect('localhost','root','','blood_donation');
  
  if($con)
  {
    echo"success"; 
  }
  else{
    echo "error";
  }


// PHP Search Script 

$sql = "select * from donar where bloodgroup = '".$_POST['bloodgroup']."' and city = '". $_POST['city'] ."' "; 
$result = sql_query($sql,$con)or die (mysql_error()); 


if (mysql_num_rows($result)==0){ 
echo "No Match Found"; 
}else{ 
while ($row = mysql_fetch_array($result)){ 
echo "Name: " .$row['name']." ".$row["username"]."<br>"; 
echo "Bloodgroup: ".$row['bloodgroup']."<br>"; 
// echo "Department: ".$row['department_name']."<br>"; 
// echo "Directorate: ".$row['directorate_name']."<br>"; 
//echo "Site: ".$row['site_name']."<br>"; 
echo "Phone #: ".$row['phone']."<br>"; 
echo "Email Address: ".$row['email']."<br>";
echo "City: ".$row['city']."<br>"; 
echo "<br>"; 
echo "---------------------------------------------------------------------"."<br>"; 
} 
} 

mysql_close(); 

*/


    $con = mysqli_connect('localhost','root','','blood_donation');
  
  if($con)
  {
    echo"success"; 
  }
  else{
    echo "error";
  }



  $set=$_POST['search'];

  if ($set) {
  	# code...
$show="SELECT * FROM donar WHERE bloodgroup='$set'"



  }




























?>