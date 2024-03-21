<?php
$servername = 'localhost';
$user = 'root';
$pass = '';
$db = 'mobilesdb';

$conn =  mysqli_connect($servername, $user, $pass, $db) or failed("not connect");


if(isset($_POST['submit'])){

   $name =$_POST['name'];
   $email =$_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];
   
   $q = "insert into Contactus(name,email,phone,message) values ('$name','$email','$phone','$message')";

$exe=mysqli_query($conn,$q);

   if(!$exe){
      die(mysqli_error($conn).$q);
}else{
   echo "<script>alert('Your Message Is SUBMITTED');</script>";
}
}
?>