<?php
$email = $_POST['email'];
$password = $_POST['password']; 
//Database connection

$conn = new mysqli('localhost:3307','root','','login');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into log(email,password) values(?,?)");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    echo "Data Submited Successfully...";

    $stmt->close();
    $conn->close();
}

?>