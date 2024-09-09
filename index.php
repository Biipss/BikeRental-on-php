<?php
    include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Online Bike Rental Service</title>
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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <!-- <a href="service.php" class="nav-item nav-link">Service</a> -->
                        <div class="nav-item dropdown">
                            <a href="bike.php" class="nav-item nav-link">Bikes</a>
                            <!-- <div class="dropdown-menu rounded-0 m-0">
                                <a href="bike.php" class="dropdown-item">Bike Listing</a>
                                 <a href="booking.php" class="dropdown-item">Bike Booking</a> 
                            </div> -->
                        </div>
                        <div class="nav-item dropdown">
                            
                                <a href="team.php" class="nav-item nav-link">The Team</a>
                            
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link" style="color: white;">CONTACT</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-10" src="img/2.jpg" >
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h4 class="text-white text-uppercase mb-md-3">Rent A Bike</h4>
                            <h1 class="display-1 text-white mb-md-4">Best Rental Bike In Your Location</h1>
                            <a href="login.php">
                        <!-- <button  class="btn btn-block btn-primary py-3" type="submit">Reserve Now</button> </a> -->
                    </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
              
                   
                
            </a>

        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">1</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">Bike Rental</span></h1>
            <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/ab.jpeg" alt="">
                    <h5>Welcome to BS Motorbike Rentals! Whether you're exploring the city or embarking on an adventure, we offer a wide selection of well-maintained bikes and scooters to suit every rider's needs. Our straightforward rental process, competitive rates, and commitment to quality ensure a worry-free experience. With reliable support on call, we're here to keep your journey smooth and enjoyable. Choose BS Motorbike Rentals for exceptional service and a ride you can trust, no matter where the road takes you.</h5>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-banner py-5 px-4 text-center">
                <div class="py-5">
                    <h1 class="display-1 text-uppercase text-primary mb-4">20% OFF</h1>
                    <h1 class="text-uppercase text-light mb-4">Special Offer For New Members</h1>
                    <p class="mb-4">From 1st Sep to 30th Sep 2024</p>
                    <a class="btn btn-primary mt-2 py-3 px-5" href="register.php">Register Now</a>
                 </div>
            </div>
        </div>
    </div> 
   <!-- Banner End -->


    <!-- Rent A Bike Start -->
    <?php require 'bikelist.php' ?>


    <!-- Team Start -->
 <div class="container-fluid py-5">
        <div class="container py-5">
        <h1 class="display-1 text-primary text-center">3</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Meet Our Team</h1>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-1.jpeg" alt="">
                    <div class="position-relative py-4">
                        <!-- <h4 class="text-uppercase">C.Ronaldo</h4> -->
                        <!-- <p class="m-0">Designation</p> -->
                        <!-- <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-2.jpeg" alt="">
                    <div class="position-relative py-4">
                        <!-- <h4 class="text-uppercase">Full Name</h4> -->
                        <!-- <p class="m-0">Designation</p> -->
                        <!-- <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-3.jpeg" alt="">
                    <div class="position-relative py-4">
                        <!-- <h4 class="text-uppercase">Full Name</h4>
                        <p class="m-0">Designation</p> -->
                        <!-- <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-4.jpeg" alt="">
                    <div class="position-relative py-4">
                        <!-- <h4 class="text-uppercase">Full Name</h4>
                        <p class="m-0">Designation</p> -->
                        <!-- <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Banner Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0"> -->
                <!-- <div class="col-lg-6 px-0"> -->
                    <!-- <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;"> -->
                        <!-- <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" alt=""> -->
                        <!-- <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Want to be driver?</h3>
                            <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                            <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-center">
                            <h3 class="text-uppercase text-light mb-3">Looking for a bike?</h3>
                            <p class="mb-4">We provide best quality bikes in reasonable price</p>
                            <a class="btn btn-primary py-2 px-4" href="">Start Now</a> -->
                        <!-- </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/images.jfif" alt="">
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </div> -->
    <!-- Banner End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-1 text-primary text-center">05</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-1.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Client Name</h4>
                    <i class="mb-2">Profession</i>
                    <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-2.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Client Name</h4>
                    <i class="mb-2">Profession</i>
                    <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-3.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Client Name</h4>
                    <i class="mb-2">Profession</i>
                    <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
                <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="img-fluid ml-n4" src="img/testimonial-4.jpg" alt="">
                        <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                    </div>
                    <h4 class="text-uppercase mb-2">Client Name</h4>
                    <i class="mb-2">Profession</i>
                    <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">4</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form action="contactsave.php" method="post">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" name="name" placeholder="Your Name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" name="email" placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-4" name="subject" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control py-3 px-4" rows="5" name="message" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                        <div class="d-flex mb-3"> 
                            <div class="mt-n1">
                                <h5 class="text-light">Head Office</h5>
                                <p>Naxal,Kathmandu</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">

                            <div class="mt-n1">
                                <h5 class="text-light">Branch Office</h5>
                                <p>Teku,Kathmandu</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            
                            <div class="mt-n1">
                                <h5 class="text-light">Customer Service</h5>
                                <p>bikerental@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            
                            <div class="mt-n1">
                                <h5 class="text-light">Return & Refund</h5>
                                <p class="m-0">refundservice@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/logo1.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/logo2.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/logo3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/logo4.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/logo5.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/logo6.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


     <!-- Footer Start -->
     <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>Teku,Kathmandu</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>01-4269876</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>bikerental@gmail..com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Bike Gallery</h4>
                <div class="column mx-n2">
                    <div class="col-4 px-1 mb-2">
                        <a href="bike.php"><img class="w-100" src="img/sell1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href="bike.php"><img class="w-100" src="img/sell3.jfif" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href="bike.php"><img class="w-100" src="img/sell4.jfif" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href="bike.php"><img class="w-100" src="img/sell6.jfif" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5"> 
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="#">Bike Rental Service</a>. All Rights Reserved.</p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
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