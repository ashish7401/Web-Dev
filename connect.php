<?php

session_start();
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$username=$_POST['username'];
$password=$_POST['password'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(!$conn){
    echo "sorry cant help";
    die();
}
$sql="SELECT * FROM user where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count>=1){
    
    header("Location: http://192.168.43.136/user.html");
    exit();
}
else{
    echo"username and password doesnt exist";
    die();
}
?>