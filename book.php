<?php
    include('./dbconfig.php');
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $uname=$_SESSION['username'];
    $fname = $_POST['fname'];
    $fbike = $_POST['fbike'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $adate = $_POST['adate'];
    $price = $_POST['price'];
    $hiring = trim($_POST['hiring']);
    $payment = $_POST['payment'];
    $book = "INSERT INTO book(`FullName`,`Mobile Number`,`Email`,`Arriving Date`,`Hiring Detail`,`Payment`,`BikeName`,`Price`) 
            values ('$fname','$number','$email','$adate','$hiring','$payment','$fbike',$price);";
    $savedata = $conn->query($book);
    // header('location: ./well.php');
    echo "<script>alert('Thankyou for booking.".$uname."');location.replace('./index.php')</script>";
}
?>
