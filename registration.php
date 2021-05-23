<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if($confirm==$password){
    $sql="INSERT into user (username,password) values ('$username','$password')";
    if(mysqli_query($conn,$sql)){
        echo "successfully registered";
    }
    else{
        echo "there was a problem";
    }
}
else{
    echo "password and confirmed password did not match";
    die();
}
?>