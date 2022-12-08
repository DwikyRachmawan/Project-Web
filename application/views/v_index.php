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
            <a href="<?php echo base_url() .'welcome/' ?>" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">Low Coffe</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="<?php echo base_url() . 'welcome/' ?>" class="nav-item nav-link active">Home</a>
                    <a href="<?php echo base_url() . 'welcome/about' ?>" class="nav-item nav-link">About</a>
                    <a href="<?php echo base_url() . 'welcome/service' ?>" class="nav-item nav-link">Service</a>
                    <a href="<?php echo base_url() . 'welcome/menu' ?>" class="nav-item nav-link">Menu</a>
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

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo base_url("assets/img/carousel-1.jpg")?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Delicious Coffee</h2>
                        <h1 class="display-1 text-white m-0">Low Coffe</h1>
                        <h2 class="text-white m-0"> SINCE 1927 </h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url("assets/img/carousel-2.jpg")?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Delicious Coffee</h2>
                        <h1 class="display-1 text-white m-0">Low Coffe</h1>
                        <h2 class="text-white m-0"> SINCE 1927 </h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
        <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
                <h1 class="display-4">Competitive Pricing</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Hot Coffee</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo base_url("assets/img/menu-1.jpg")?>" alt="">
                            <h5 class="menu-price">Rp.50000</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Black Coffee</h4>
                            <p class="m-0">Black coffee is just coffee. Coffee that has been brewed without anything else but the coffee. No sugar, no sweetener, no creamer, no anything. It can’t have been brewed with anything else but the hot water and the coffee grounds. Well, that seems okay.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo base_url("assets/img/menu-2.jpg")?>" alt="">
                            <h5 class="menu-price">Rp.60000</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Cortado Coffee</h4>
                            <p class="m-0">Cortado is actually a range of different drinks to different people. Some people consider it a coffee with steamed milk (in a specific ratio, of course), while others consider a flat white or a latte as a cortado. So just what is it? Well, it’s a lot of things, but it’s definitely a great choice for the start to your morning.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo base_url("assets/img/menu-3.jpg")?>" alt="">
                            <h5 class="menu-price">Rp.70000</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Cappuccino Coffee</h4>
                            <p class="m-0">Cappuccino, in short, is a very popular Italian drink that is served hot and features espresso as the coffee component of choice. But espresso is only a part of what you’ll find in this beverage. You’ll also find plenty of milk in what’s called ‘microfoam.’ Let’s back up here and give you the breakdown.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Snacks</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo base_url("assets/img/makanan3.jpg")?>" alt="">
                            <h5 class="menu-price">Rp.80000</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>SANDWICHES</h4>
                            <p class="m-0">BAHN MIE CHICKEN BAGUETTE HONEY MUSTARD ROAST BEEF FOCACCIA MEDITERRANEAN CHICKEN SANDWICH SMOKED BEEF MUSHROOM AND CHEESE PANINI SPICY ROAST BEEF DARK CIABATTA TUNA BLACK PEPPER SOUR DOUGH BREAD</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo base_url("assets/img/makanan1.png")?>" alt="">
                            <h5 class="menu-price">Rp.90000</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>FRESH FOOD</h4>
                            <p class="m-0">It’s true. The perfect cup of coffee and a wholesome, delicious meal or snack can make your day. So we make sure everything you choose is of the finest quality. Because really, isn’t that how life should be?</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo base_url("assets/img/makanan2.png")?>" alt="">
                            <h5 class="menu-price">Rp.40000</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>DELICIOUS, HANDCRAFTED BEVERAGES AND GREAT-TASTING FOOD</h4>
                            <p class="m-0">Our pastries and sandwiches are made with high-quality, simple ingredients. So all the goodness you taste is real food, simply delicious</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->
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
    <script src="<?php echo base_url("assets/contact.js")?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url("assets/js/main.js")?>"></script>
</body>

</html>