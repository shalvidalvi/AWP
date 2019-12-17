<?php
$conn =new mysqli('127.0.0.1','root','','php');

if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}

echo "connection success";
$name=$_POST['name'];
$pass=$_POST['pass'];
#echo $name;
# $sql ="INSERT INTO login (name,pass) VALUES ('$name','$pass')";
$sql = "INSERT INTO login (name,pass)  VALUES ('$name','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
