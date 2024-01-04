<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dream Escapes Tours And Travels</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


//Database connection

$conn = new mysqli('localhost:3307','root','','registration');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{ 
    $stmt = $conn->prepare("insert into register(name, email, phone)
    values(?,?,?)");
    $stmt->bind_param("sss",$name, $email, $phone);
    $stmt->execute();

    echo '<div class="container mt-5">';
    echo '<div class="row justify-content-evenly">';
    
    echo '<div class="col-sm-8 mt-5">';
    echo '<div class="card" >';
    echo '<div class="card-body bg-light">';
    echo "Hello ",$name,", Thank you for your registration.";
    echo "<br>";
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $phone;
    echo "<br>";
    
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

    $stmt->close();
    $conn->close();
}
?>


</body>
</html>