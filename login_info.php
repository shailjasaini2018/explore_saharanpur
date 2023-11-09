<?php
session_start();
header('location:home.php');
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successfull";
}
else{
    echo "No connection";
}
mysqli_select_db($con,'exploresre');
$email= $_POST['email'];
$password  = $_POST['password'];
$query =" select * from registration where fullname = '$fullname' && email ='$email' && password ='$password' && cpassword ='$cpassword' ";
$result=mysqli_query($con,$query);
$num= mysqli_query($result);
if($num==1){
    echo"duplicate data";
}
else{
$querys="insert into login( email , password )
values( '$email', '$password')";
mysqli_query($con , $querys);
}
?>


