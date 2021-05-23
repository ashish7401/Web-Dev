<?php

session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
$imagename=$_FILES['myimage']['name']; 
$imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));
$sql="INSERT INTO images(username,password,pic) VALUES('$username','$password','{$imagetmp}')";
if(mysqli_query($conn,$sql)){
    echo "image successfully uploaded";
}
else{
    echo "there was a problem inserting the image please try again later";
}

?>