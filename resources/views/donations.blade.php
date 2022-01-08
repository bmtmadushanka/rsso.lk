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

       !-- Call To Action Start -->
         <div class="call-to-action">
            <div class="container text-center">
                <div class="section-header">
                    <h2>We Accept Your Donation</h2>
                    <p>
                    we respect you as a family for your donations.children is our future we always protect them 
                    </p>
                </div>
                <form class="contactForm" action="{{ route('make.payment') }}" method ="POST">
                @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="amount" placeholder="Amount" />
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" />
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Message" name="message"></textarea>
                    </div>
                    <div><button class="btn" type="submit" style="background: #f1a212f7;border-radius: 30px;">Donate Now</button></div>
                </form>
            </div>
        </div>
        <!-- Call To Action End -->        
        
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
