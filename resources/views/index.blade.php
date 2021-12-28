<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>RSSO.lk</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Raigampura Social Service Organization" name="keywords">
        <meta content="Raigampura Social Service Organization" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 

        <!-- Libraries CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Start -->
        <div id="nav">
            <div class="container-fluid">
               @include('navbar')
            </div>
        </div>
        <!-- Nav End -->

        <!-- Header Start-->
        <div class="header">
            <div id="header-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#header-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#header-slider" data-slide-to="1"></li>
                    <li data-target="#header-slider" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row align-items-center" style="background-color:#0f0101">
                            <div class="col-md-6">
                                <div class="carousel-content">
                                    <!-- <h2>Welcome to RSSO</h2>
                                    <p>Raigampura Social Service Organaization</p> -->
                                    <a href="index.html" class="">
                                        <img src="img/logo-lg.png" alt="Logo" style="height:300px">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="carousel-img">
                                    <img src="img/slider-1.png" alt="Image">
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center" style="background-color:#0f0101">
                            <div class="col-md-6">
                                <div class="carousel-content">
                                    <!-- <h2>Nulla tristique</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur</p> -->
                                    <a href="index.html" class="">
                                        <img src="img/logo-lg.png" alt="Logo" style="height:300px">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="carousel-img">
                                    <img src="img/slider-2.png" alt="Image">
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center" style="background-color:#0f0101">
                            <div class="col-md-6">
                                <div class="carousel-content">
                                    <!-- <h2>Pellentesque rutrum</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur</p> -->
                                    <a href="index.html" class="">
                                        <img src="img/logo-lg.png" alt="Logo" style="height:300px">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="carousel-img">
                                    <img src="img/slider-3.png" alt="Images">
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>

                <a class="carousel-control-prev" href="#header-slider" data-slide="prev">
                    <i class="ion-ios-arrow-back"></i>
                </a>
                <a class="carousel-control-next" href="#header-slider" data-slide="next">
                    <i class="ion-ios-arrow-forward"></i>
                </a>
            </div>
        </div>
        <!-- Header End-->

        <!-- About Start-->
        <div class="about">
            <div class="container">
                <div class="section-header">
                    <h2>About Us</h2>
                    <p>
                    Raigampura Social Servises Organization  is a nonprofit organization established for the purpose of serving the underserved communities in Sri Lanka by providing opportunities that developed into a productive member of the society.
                    </p>
                </div>
                
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="about-content">
                            <h2>Welcome to Our Site</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum rutrum ligula. Integer ac porttitor mi. In finibus vehicula aliquet. Vestibulum et velit placerat pretium lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum rutrum ligula. Integer ac porttitor mi. In finibus vehicula aliquet. Vestibulum et velit placerat pretium lorem
                            </p>
                            <a class="btn" href="#">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="img/about-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="about-content">
                            <h2>Our Vision</h2>
                            <p>
                            Many people in Sri Lanka come into contact with social services at some point in their lives. When they do they find valuable services provided by a wide range of individuals and organisations. They experience dedicated and skilled workers who are there to protect and support people or help them to deal with challenging circumstances and to get back on track with their lives.
                            </p>
                            <a class="btn" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="img/about-goal.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="about-content">
                            <h2>Our Mission</h2>
                            <p style="height: 193px;">
                            Our mission is to put a smile to every child, mother and father in Sri Lanka and the world by ensuring access to education, nutritious food in partnership with donor companies, policy makers, supporters and the community we serve.
                            </p>
                            <a class="btn" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

         <!-- Call To Action Start -->
         <div class="call-to-action">
            <div class="container text-center">
                <div class="section-header">
                    <h2>We Accept Your Donation</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac lacus eget nunc imperdiet 
                    </p>
                </div>
                <a class="btn" href="#" style="background: #f1a212f7;border-radius: 30px;">Donate Now</a>
            </div>
        </div>
        <!-- Call To Action End -->        
        
        <!-- Portfolio Start -->
        <div class="portfolio">
            <div class="container">
                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac lacus eget nunc imperdiet 
                    </p>
                </div>

                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio-1.jpg" class="img-fluid" alt="Portfolio">
                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio" data-title="Lorem ipsum dolor" class="link-preview" title="Preview"><i class="ion-md-eye"></i></a>
                            <a href="" class="link-details" title="More Details"><i class="ion-md-open"></i></a>
                        </div>

                        <div class="portfolio-info">
                            <h3>Lorem ipsum dolor</h3>
                            <p>Web Design</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio-2.jpg" class="img-fluid" alt="Portfolio">
                            <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Nulla ullamcorper pharetra" title="Preview"><i class="ion-md-eye"></i></a>
                            <a href="" class="link-details" title="More Details"><i class="ion-md-open"></i></a>
                        </div>

                        <div class="portfolio-info">
                            <h3>Nulla ullamcorper pharetra</h3>
                            <p>Web Development</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio-3.jpg" class="img-fluid" alt="Portfolio">
                            <a href="img/portfolio-3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Phasellus eget dictum" title="Preview"><i class="ion-md-eye"></i></a>
                            <a href="" class="link-details" title="More Details"><i class="ion-md-open"></i></a>
                        </div>

                        <div class="portfolio-info">
                            <h3>Phasellus eget dictum</h3>
                            <p>App Design</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio-4.jpg" class="img-fluid" alt="Portfolio">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio" data-title="Lorem ipsum dolor" class="link-preview" title="Preview"><i class="ion-md-eye"></i></a>
                            <a href="" class="link-details" title="More Details"><i class="ion-md-open"></i></a>
                        </div>

                        <div class="portfolio-info">
                            <h3>Donec mattis vestibulum</h3>
                            <p>App Development</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio-5.jpg" class="img-fluid" alt="Portfolio">
                            <a href="img/portfolio-5.jpg" class="link-preview" data-lightbox="portfolio" data-title="Nulla ullamcorper pharetra" title="Preview"><i class="ion-md-eye"></i></a>
                            <a href="" class="link-details" title="More Details"><i class="ion-md-open"></i></a>
                        </div>

                        <div class="portfolio-info">
                            <h3>Pellentesque ullamcorper</h3>
                            <p>Web Design</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-img">
                            <img src="img/portfolio-6.jpg" class="img-fluid" alt="Portfolio">
                            <a href="img/portfolio-6.jpg" class="link-preview" data-lightbox="portfolio" data-title="Phasellus eget dictum" title="Preview"><i class="ion-md-eye"></i></a>
                            <a href="" class="link-details" title="More Details"><i class="ion-md-open"></i></a>
                        </div>

                        <div class="portfolio-info">
                            <h3>Sed pretium sapien</h3>
                            <p>Web Development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->

        
        <!-- Counters Start-->
        <div class="counters">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6 text-center">
                        <i class="ion-md-person"></i>
                        <h2 data-toggle="counter-up">100</h2>
                        <p>Our Staffs</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <i class="ion-md-people"></i>
                        <h2 data-toggle="counter-up">200</h2>
                        <p>Our Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <i class="ion-md-checkmark"></i>
                        <h2 data-toggle="counter-up">300</h2>
                        <p>Completed Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <i class="ion-md-trending-up"></i>
                        <h2 data-toggle="counter-up">400</h2>
                        <p>Running Projects</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counters End-->

        
        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header">
                    <h2>Meet our team</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac lacus eget nunc imperdiet 
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6 team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid" alt="Team Member">
                            <div class="team-social">
                                <a href="#"><i class="ion-logo-twitter"></i></a>
                                <a href="#"><i class="ion-logo-facebook"></i></a>
                                <a href="#"><i class="ion-logo-linkedin"></i></a>
                                <a href="#"><i class="ion-logo-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>John P. Haight</h3>
                            <p>Web Designer</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" class="img-fluid" alt="Team Member">
                            <div class="team-social">
                                <a href="#"><i class="ion-logo-twitter"></i></a>
                                <a href="#"><i class="ion-logo-facebook"></i></a>
                                <a href="#"><i class="ion-logo-linkedin"></i></a>
                                <a href="#"><i class="ion-logo-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>David R. Bernard</h3>
                            <p>Web Developer</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" class="img-fluid" alt="Team Member">
                            <div class="team-social">
                                <a href="#"><i class="ion-logo-twitter"></i></a>
                                <a href="#"><i class="ion-logo-facebook"></i></a>
                                <a href="#"><i class="ion-logo-linkedin"></i></a>
                                <a href="#"><i class="ion-logo-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>Dana A. Thomas</h3>
                            <p>Apps Developer</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" class="img-fluid" alt="Team Member">
                            <div class="team-social">
                                <a href="#"><i class="ion-logo-twitter"></i></a>
                                <a href="#"><i class="ion-logo-facebook"></i></a>
                                <a href="#"><i class="ion-logo-linkedin"></i></a>
                                <a href="#"><i class="ion-logo-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>Ava M. Proctor</h3>
                            <p>Apps Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonials Start -->
        <div class="testimonials">
            <div class="container">
                <div class="section-header">
                    <h2>Reviews</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac lacus eget nunc imperdiet 
                    </p>
                </div>

                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item row align-items-center">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Testimonial image">
                        </div>
                        <div class="testimonial-text">
                            <h3>Anna M. Brzezinski</h3>
                            <h4>businesswoman</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Maecenas dictum vel
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item row align-items-center">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="Testimonial image">
                        </div>
                        <div class="testimonial-text">
                            <h3>Shirley H. Lee</h3>
                            <h4>businesswoman</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Maecenas dictum vel
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item row align-items-center">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="Testimonial image">
                        </div>
                        <div class="testimonial-text">
                            <h3>Kerry E. Thomas</h3>
                            <h4>businesswoman</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Maecenas dictum vel
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item row align-items-center">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="Testimonial image">
                        </div>
                        <div class="testimonial-text">
                            <h3>Kerry E. Thomas</h3>
                            <h4>businesswoman</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Maecenas dictum vel
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item row align-items-center">
                        <div class="testimonial-img">
                            <img src="img/testimonial-5.jpg" alt="Testimonial image">
                        </div>
                        <div class="testimonial-text">
                            <h3>Kerry E. Thomas</h3>
                            <h4>businesswoman</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Maecenas dictum vel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->
        
        <!-- Clients Start -->
        <div class="clients">
            <div class="container">
                <div class="section-header">
                    <h2>Our Clients</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac lacus eget nunc imperdiet  
                    </p>
                </div>

                <div class="owl-carousel clients-carousel">
                    <img src="img/client-1.jpg" alt="Client Logo">
                    <img src="img/client-2.jpg" alt="Client Logo">
                    <img src="img/client-3.jpg" alt="Client Logo">
                    <img src="img/client-4.jpg" alt="Client Logo">
                    <img src="img/client-5.jpg" alt="Client Logo">
                    <img src="img/client-6.jpg" alt="Client Logo">
                    <img src="img/client-7.jpg" alt="Client Logo">
                    <img src="img/client-8.jpg" alt="Client Logo">
                </div>

            </div>
        </div>
        <!-- Clients End -->

        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac lacus eget nunc imperdiet 
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form">
                            <form class="contactForm">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button class="btn" type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26361250.667320687!2d-113.75533773453304!3d36.24128894212527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1574923227698!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>About Us</h4>
                            <ul>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="#">Home</a></li>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="#">About us</a></li>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="#">Our services</a></li>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="#">Terms & condition</a></li>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="#">Lorem ipsum</a></li>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="#">Pellentesque</a></li>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="#">Suspendisse egestas</a></li>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="#">Nulla tristique</a></li>
                                <li><i class="ion-ios-arrow-forward"></i> <a href="#">Phasellus leo</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Contact Us</h4>
                            <p>
                                1300  Center Avenue<br>
                                Fresno, California<br>
                                United States <br>
                                <strong>Phone:</strong> +123-456-7890<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>

                            <div class="social-links">
                                <a href="#"><i class="ion-logo-twitter"></i></a>
                                <a href="#"><i class="ion-logo-facebook"></i></a>
                                <a href="#"><i class="ion-logo-linkedin"></i></a>
                                <a href="#"><i class="ion-logo-instagram"></i></a>
                                <a href="#"><i class="ion-logo-googleplus"></i></a>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6 footer-newsletter">
                            <h4>Subscription</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit"  value="Subscribe">
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 copyright">
                        Copyright &copy; 2020 <a href="https://codecyon.com">Codecyon</a>. All Rights Reserved
                    </div>
                    <div class="col-md-6 credit">
                        Template by <a href="https://codecyon.com">Codecyon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

        <!-- Libraries JS -->
        <script src="{{url('lib/jquery/jquery.min.js')}}"></script>
        <script src="{{url('lib/jquery/jquery-migrate.min.js')}}"></script>
        <script src="{{url('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('lib/easing/easing.min.js')}}"></script>
        <script src="{{url('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{url('lib/counterup/counterup.min.js')}}"></script>
        <script src="{{url('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{url('lib/lightbox/js/lightbox.min.js')}}"></script>

        <!-- Main Javascript -->
        <script src="{{url('js/main.js')}}"></script>


    </body>
</html>
