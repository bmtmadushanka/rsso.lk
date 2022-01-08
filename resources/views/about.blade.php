<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rsso.lk</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Rsso.lk" name="keywords">
        <meta content="Rsso.lk" name="description">

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

        <!-- About Start-->
        <div class="about mt-100">
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
                            Welcome to the website of the Raigampura Social Services Organaization, Welfare and Social Insurance.
                            The website of the RSSO offers easy access to information in connection with the rights and obligations of employees and employers in the field of Social Security.
                            </p>
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
                            <a class="btn" href="{{route('vision')}}">Read More</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Footer Start -->
        @include('footer')
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

        <!-- Libraries JS -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Main Javascript -->
        <script src="js/main.js"></script>

    </body>
</html>
