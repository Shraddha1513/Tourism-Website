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

<body class="display_form">

<?php 

// booking
$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$destination = $_POST['destination'];
$checkIn= $_POST['checkIn'];
$checkOut= $_POST['checkOut'];
// flights
$flights=$_POST['flights'];
$departure= $_POST['departure'];
$class= $_POST['class'];
$room= $_POST['room'];
$noRoom= $_POST['noRoom'];
// payment
$payment= $_POST['payment'];
$namecard= $_POST['namecard'];
$card= $_POST['card'];
$exp= $_POST['exp'];
$cvv= $_POST['cvv'];
$UPI_No= $_POST['UPI_No'];



//Database connection

$conn = new mysqli('localhost:3307','root','','book');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into booking(name, email, phone, destination, checkIn, checkOut, 
    flights, departure, class, room, noRoom, payment, namecard, card, exp, cvv, UPI_No)
    values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
   
    $stmt->bind_param("sssssssssssssssss",$name, $email, $phone, $destination, $checkIn, $checkOut, 
    $flights, $departure, $class, $room, $noRoom, $payment, $namecard, $card, $exp, $cvv, $UPI_No);
   
    $stmt->execute();

    // html code
    echo '<section class="display">';
    echo '<div class="container mt-5">';
    echo '<div class="row justify-content-evenly">';
    
    echo '<div class="col-sm-8 mt-5">';
    echo '<div class="card">';
    echo '<div class="card-body">';
    
    echo "<b>Hello ",$name,"</b> ,Thank you for making a reservation.";
    echo "<br><br>";
    echo "You’re booked! Pack your bags – see you on <b>",$checkIn,"</b> for <b>",$destination,"</b>";
    echo "</br>";
    echo "Return on: <b>",$checkOut,"</b>";
    echo "<br><br>";
    echo $email;
    echo "</br>";
    echo "Your departure location: <b>",$departure,"</b>";
    
    echo "<br>";
    echo "<br>";

    echo "If you need to get in touch, you can email or phone us directly. 
    We look forward to welcoming you soon!","<br><br>","Thanks again","<br>";

    echo "<br>","More info:<b>","<br>","email: Dreamescapes@gmail.com","<br>",
     "phone number: +012 345 67890","<br>",
     "Office:123 Street, Delhi, India</b>";

    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
   



    echo '</section>';
    $stmt->close();
    $conn->close(); 
}


?>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>