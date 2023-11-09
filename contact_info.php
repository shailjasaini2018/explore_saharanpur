<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successfull";
}
else{
    echo "No connection";
}
mysqli_select_db($con,'exploresre');
$email= $_POST['email'];
$message = $_POST['message'];
$query = "insert into contact ( email ,message)
values('$email' ,'$message')";
echo "$query";
mysqli_query($con, $query );
header('location:home.php');
?>





