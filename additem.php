<?php
include 'session.php';
if($_SESSION['usertype']!="admin"){
    echo "<script>alert('You are not admin')</script>";
    echo "<script> location.replace('index.php'); </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add Item</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/reg.css" rel="stylesheet">
</head>
<body>
    <?php require 'nav.php' ?>
<div class="column" style="margin: 50px;">
<div class="col-lg-20 text-center">
<div class="bg-light mb-4" style="padding: 30px;">
                    <h1 class="section-title">Add Item</h1><br>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                    <table class="center">
                   <tr><td><label>Name</label></td>
                   <td><input type="text"  name="title"></td></tr>
                   <tr><td><label>Price</label></td>
                   <td><input type="text"  name="price"></td></tr>
                   <tr><td><label>Model</label></td>
                   <td><input type="text"  name="model"></td></tr>
                   <tr><td><label>Mileage</label></td>
                   <td><input type="text"  name="mileage"></td></tr>
                   <tr><td><label>Image</label></td>
                   <td> <input type="file" name="file"> <br></td></tr>
                  
                    </table>
                    <br>  <input type="submit"  name="submit"><br><br>
                    </form>
                    </div>
                    </div>
            </div>
</body>
</html>