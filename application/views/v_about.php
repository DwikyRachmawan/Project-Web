<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Low Coffe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url("assets/img/icon2.jpeg")?>" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url("assets/lib/owlcarousel/assets/owl.carousel.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css")?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url("assets/css/style.min.css")?>" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3 fixed-top">
            <a href="<?php echo base_url() . 'welcome/'?>" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">Low Coffe</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="<?php echo base_url("") . 'welcome/'?>" class="nav-item nav-link">Home</a>
                    <a href="<?php echo base_url("") . 'welcome/about/'?>" class="nav-item nav-link active">About</a>
                    <a href="<?php echo base_url("") . 'welcome/service/'?>" class="nav-item nav-link">Service</a>
                    <a href="<?php echo base_url("") . 'welcome/menu/'?>" class="nav-item nav-link">Menu</a>
                    <a href="<?php echo base_url() . 'auth/login' ?>" class="nav-item nav-link">login</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="<?php echo base_url() . 'welcome/reservation/'?>" class="dropdown-item">Reservation</a>
                            <a href="<?php echo base_url() . 'welcome/testimonial/'?>" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="<?php echo base_url() . 'welcome/contact/'?>" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">About Us</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="<?php echo base_url("") . 'welcome/'?>">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">About Us</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Serving Since 1927</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Story</h1>
                    <p>BORN FROM A LONG LOVE AFFAIR WITH COFFEE AND A PASSION FOR GOOD FOOD, WE’VE DESIGNED Our CAFÉ TO EDUCATE COFFEE LOVERS, TO HARVEST A DEEPER ENJOYMENT OF SPECIALTY COFFEE, AND GIVE YOU THE OPPORTUNITY TO DISCOVER NEW EPICUREAN DELIGHTS WITH A Our TWIST</p>
                    <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="<?php echo base_url("assets/img/about.png")?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Vision</h1>
                    <p>At Café Concepts, Inc. our vision is to provide clients with a team of forward thinking individuals who strive to deliver the latest in culinary design and technology, while working within the confines of both the economic and time constraints of each project.</p>
                    <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


     <!-- Footer Start -->
     <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Jln Raya Bekasi</p>
                <p><i class="fa fa-phone-alt mr-2"></i>085770447735</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>LowCoffe1@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>Follow us for more information</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/profile.php?id=100088014544153"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/low.coffe/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p>2.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Newsletter</h4>
                <p>Enter your email to subscribe to the latest information from Low Coffee</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url("assets/lib/easing/easing.min.js")?>"></script>
    <script src="<?php echo base_url("assets/lib/waypoints/waypoints.min.js")?>"></script>
    <script src="<?php echo base_url("assets/lib/owlcarousel/owl.carousel.min.js")?>"></script>
    <script src="<?php echo base_url("assets/lib/tempusdominus/js/moment.min.js")?>"></script>
    <script src="<?php echo base_url("assets/lib/tempusdominus/js/moment-timezone.min.js")?>"></script>
    <script src="<?php echo base_url("assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo base_url("assets/mail/jqBootstrapValidation.min.js")?>"></script>
    <script src="<?php echo base_url("assets/mail/contact.js")?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url("assets/js/main.js")?>"></script>
</body>

</html>