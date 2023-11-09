<?php
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
$mobile =  $_POST['mobile'];
$message = $_POST['message'];
$query = "insert into feedback (fullname , email , mobile , message)
values('$fullname' , '$email' , '$mobile' , '$message')";
echo "$query";
mysqli_query($con, $query );
header('location:home.php');
?>


