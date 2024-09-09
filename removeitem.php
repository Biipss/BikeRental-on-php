<?php
include 'session.php';
if ($_SESSION['usertype'] != "admin") {
    echo "<script>alert('You are not admin')</script>";
    echo "<script> location.replace('index.php'); </script>";
}
include 'dbconfig.php';
$sql = "SELECT * FROM Products";
$result = mysqli_query($conn, $sql);
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
    <style>
        td,tr{
            padding:20px;
        }
        td img{
            height:100px;
            width:150px;
        }
        th{
            background-color:orange;
            color:black;
        }
        td{
            color:black;
        }
    </style>
</head>

<body>
    <?php require 'nav.php' ?>
    <div class="column" style="margin: 50px;">
        <div class="col-lg-20 text-center">
            <div class="bg-light mb-4" style="padding: 30px;">
                <h1 class="section-title">Remove Item</h1><br>
                <table border="1px solid black">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Mileage</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                    <?php while($i=mysqli_fetch_assoc($result)): $x=$i['pID']?>
                    <tr>
                        <td><?php echo $i['pID'] ?></td>
                        <td><?php echo $i['pTitle'] ?><br><img src="<?php echo $i['pImage'] ?>"></td>
                        <td><?php echo $i['pModel'] ?></td>
                        <td><?php echo $i['pMileage'] ?></td>
                        <td><?php echo $i['pPrice'] ?></td>
                       <?php echo " <td class='action'><a href='deletedb.php?id=".$x."'><i class='fa fa-times'></i></a></td> " ?>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>