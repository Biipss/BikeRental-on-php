<?php
include 'session.php';
if ($_SESSION['usertype'] != "admin") {
    echo "<script>alert('You are not admin')</script>";
    echo "<script> location.replace('index.php'); </script>";
}
include 'dbconfig.php';
$sql = "SELECT * FROM book";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>View</title>
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
    <style>
        th{
            font-weight:600;
            color:black;
        }
        </style>
</head>

<body>
    <?php require 'nav.php' ?>
    <div class="column" style="margin: 50px;">
        <div class="col-lg-20 text-center">
            <div class="bg-light mb-4" style="padding: 30px;">
                <h1 class="section-title">Booked Bikes</h1><br>
                <table border="1px solid black">
                    <thead>
                        <tr>
                        <th>Booked By</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>Arriving Date</th>
                        <th>Hiring Detail</th>
                        <th>Payment Method</th>
                        <th>Bike Name</th>
                        <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($i=mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $i['FullName'] ?></td>
                            <td><?php echo $i['Mobile Number'] ?></td>
                            <td><?php echo $i['Email'] ?></td>
                            <td><?php echo $i['Arriving Date'] ?></td>
                            <td><?php echo $i['Hiring Detail'] ?></td>
                            <td><?php echo $i['Payment'] ?></td>
                            <td><?php echo $i['BikeName'] ?></td>
                            <td><?php echo $i['Price'] ?></td>
                        </tr>
                        <?php endwhile; ?>
</tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>