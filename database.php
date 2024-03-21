<?php
$servername = 'localhost';
$user = 'root';
$pass = '';
$db = 'mobilesdb';

$conn =  mysqli_connect($servername, $user, $pass, $db) or failed("not connect");

if(isset($_REQUEST['submit'])){

   $name =$_POST['name'];
   $uname =$_POST['uname'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   
   $q = "insert into register(name,uname,phone,email,pass) values ('$name','$uname','$phone','$email','$pass')";

$exe=mysqli_query($conn,$q);

   if(!$exe){
      die(mysqli_error($conn).$q);
}else{
   echo "<script>alert('registered succesfully');</script>";
}
}
?>