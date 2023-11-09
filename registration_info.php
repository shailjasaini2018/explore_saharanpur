<?php
session_start();
header('location:index.php');
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successfull";
}
else{
    echo "No connection";
}
mysqli_select_db($con,'exploresre');
$fullname = $_POST['fullname'];
$email= $_POST['email'];
$password  = $_POST['password'];
$cpassword  = $_POST['cpassword'];
$query =" select * from registration where fullname = '$fullname' && email ='$email' && password ='$password' && cpassword ='$cpassword' ";
$result=mysqli_query($con,$query);
$num= mysqli_query($result);
if($num==1){
    echo"duplicate data";
}
else{
$querys="insert into registration( fullname ,email , password ,cpassword)
values( '$fullname'  ,'$email', '$password' ,'$cpassword')";
mysqli_query($con , $querys);
}
?>