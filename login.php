<?php
    include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
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
     <!-- Topbar Start -->
     <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>01-4269876</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>bikerental@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                   
                </div>
                <?php require 'nav.php'; ?>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="index.php" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Bike Rental</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <!-- <a href="service.php" class="nav-item nav-link">Service</a> -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Bikes</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="bike.php" class="dropdown-item">Bike Listing</a>
                                <a href="booking.php" class="dropdown-item">Bike Booking</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            
                                <a href="team.php" class="nav-item nav-link">The Team</a>
                            
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link" style="color: white;">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->     
<div class="column" style="margin: 50px;">
<div class="col-lg-20 text-center">
<div class="bg-light mb-4" style="padding: 30px;">
                    <h1 class="section-title">Login</h1><br>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table class="center">
                   <tr><td><label>Username</label></td>
                   <td><input type="text"  name="username"></td></tr>
                   <tr><td><label>Password</label></td>
                   <td><input type="password"  name="password"></td></tr>
                    </table>
                    <br>  <input type="submit" value="Login" name="login"><br><br>
                    <p>Create An Account &nbsp;<a href="register.php">Register</p></a>
                    </form>
                    </div>
                    </div>
            </div>
            <?php
            include 'dbconfig.php';
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST['login'])){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    
                    if($username==NULL){
                        echo "<script>alert('Enter Username')</script>";
                    }
                    else if($password==NULL){
                        echo "<script>alert('Enter Password')</script>";
                    }
                    else{
                        $sql="SELECT * FROM users
                        where Username='$username' AND Password='$password' ";
                        $result=mysqli_query($conn,$sql);
                        $num=mysqli_num_rows($result);
                        $i=mysqli_fetch_assoc($result);
                        if($num==1&&$i['uType']=='user'){
                            $_SESSION['username']=$username;
                            $_SESSION['usertype']="user";
                            $_SESSION['loggedin']=true;
                        // $p = $_SERVER['PHP_SELF'];
                        echo "<script> location.replace('index.php'); </script>";
                        }
                        else if($num==1&&$i['uType']=='admin'){
							$_SESSION['username']=$username;
							$_SESSION['usertype']="admin";
							$_SESSION['loggedin']=true;
                            echo "<script>alert('Welcome Admin')</script>";
                            echo "<script>location.replace('admin.php')</script>";
						}
						
                        else{
                            echo "<script>console.log('login vayena');;alert('User not found, Please register');</script>";
                            echo "<script> location.replace('register.php'); </script>";
                        }
                    }
                }
            }
        ?>

</body>
</html>