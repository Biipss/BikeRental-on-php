<?php
$conn = new mysqli("localhost","root","","bikerental");
if ($conn->connect_error) {
    die($conn->connect_error);
}
?>