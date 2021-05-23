<?php
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$websitename=$_POST['websitename'];
$websiteusername=$_POST['websiteusername'];
$websitepassword=$_POST['websitepassword'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

$sql="INSERT into details (username,password,website,uname,pwd) values ('$username','$password','$websitename','$websiteusername','$websitepassword')";
    if(mysqli_query($conn,$sql)){
        echo "successfully inserted user details";
    }
    else{
        echo "there was a problem";
    }

?>