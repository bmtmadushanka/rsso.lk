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
       
        <!-- Team Start -->
        <div class="team" style="padding-top:150px;">
            <div class="container">
                <div class="section-header">
                    <h2>We Are Family</h2>
                    <p>
                        welcome to our lovely family 
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

        <!-- Footer Start -->
        @include('footer')
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
