<?php
    include('./dbconfig.php');
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = trim($_POST['message']);
    $save = "INSERT INTO contact(`Name`,`Email`,`Subject`,`Message`) 
            values ('$name','$email','$subject','$message')";
    $savedata = $conn->query($save);
    header('location: ./index.php');
}
?>