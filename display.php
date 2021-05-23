<?php

session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$confirm=$_POST['confirm'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
echo "WEBSITE         USERNAME       PASSWORD";
echo "<br>";
$sql="select * from details where username='$username' and password='$password'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
 
while($row = $result->fetch_assoc()) {
echo $row['website']." ";
echo $row['uname']." ";
echo $row['pwd']." ";
echo"<br>";
}

}
else{
    echo "No website username and password found";
    echo "<br>";
}

$sql = "SELECT * FROM images where username='$username' and password='$password'";
$result = mysqli_query($conn,$sql);
while($data = mysqli_fetch_array($result))
{
    echo '<img align="center" border="3" style="width: 300px; height: 500px" src="data:image/jpeg;base64,' . base64_encode($data['pic']) . '"/>';
    echo "<br>";

}
 


?>