<?php
$insert=false;
if(isset(_POST['name']))

$server= "localhost";
$username="root";
$password="";
$dbname="trip";

$conn= mysqli_connect($server, $username, $password,$dbname);

if(!$conn){
   echo "vishkash raidu";
   die("connection failed :" . mysqli_connect_error());
    }
   echo "sucess connecting to the database";
   $name=_POST['name'];
   $gender=_POST['gender'];
   $email=_POST['email'];
   $adress=_POST['adress'];
   $phone_number=_POST['phone_number'];
   $descrption=_POST['descrption'];
   $dt=_POST['dt'];
   $sql= "INSERT INTO `trip`.`trip` 
   ( `name`, `gender`, `email`, `adress`, `phone_number`, `descrption`, `dt`) 
   VALUES ( '$name', '$gender', '$email', '$adress', '$phone_number', ' $descrption', '$dt')";
   echo $sql;

   if(conn->($sql)==true)
   {
      echo "sucessfully inserted";
      $insert==true;
   }
   else{
      echo "ERROR:$sql <br> $conn->error"
      $conn->close();
   }
?>