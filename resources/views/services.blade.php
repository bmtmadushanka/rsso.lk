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
        
        <!-- Portfolio Start -->
        <div class="portfolio mt-100">
            <div class="container">
                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>
                    We don’t get to choose the opening chapter of our lives, but it’s never too late to change the story.
                    </p>
                </div>

                <div class="row portfolio-container">
                    @foreach($tasks as $data)
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-img">
                            <img src="public/images/services/{{$data->photo}}" class="img-fluid" alt="Portfolio">
                            <a href="public/images/services/{{$data->photo}}" data-lightbox="portfolio" data-title="Lorem ipsum dolor" class="link-preview" title="Preview"><i class="ion-md-eye"></i></a>
                            <button class="link-details service-view" title="More Details" data-service-name="{{$data->name}}" data-service-description="{{$data->description}}" data-service-photo="{{$data->photo}}"><i class="ion-md-open"></i></button>
                        </div>

                        <div class="portfolio-info">
                            <h3>{{$data->name}}</h3>
                            <p>{{substr($data->description,0,100)}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Portfolio End -->
        <!--Modal: modalRelatedContent-->
        <div class="modal" id="service-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <!--Content-->
            <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading">Related article</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">

                <div class="row">
                <div class="col-5">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(55).webp"
                    class="img-fluid img-artical" alt="">
                </div>

                <div class="col-7">
                    <p class="service-name"><strong>My travel to paradise</strong></p>
                    <p class="service-description">Lorem ipsum dolor sit amet consectetur adipisicing elit [...]</p>
                </div>
                </div>
            </div>
            </div>
            <!--/.Content-->
        </div>
        </div>
        <!--Modal: modalRelatedContent-->
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
        <script>
            $(document).ready(function() {
                // This WILL work because we are listening on the 'document', 
                // for a click on an element with an ID of #test-element
                $(document).on("click",".service-view",function() {
                    var name = $(this).attr('data-service-name');
                    var description = $(this).attr('data-service-description');
                    var photo = $(this).attr('data-service-photo');
                    $('.service-name').html('<b>'+name+'</b>');
                    $('.service-description').text(description);
                    $('.img-artical').attr('src','images/services/'+photo)
                    $('#service-modal').modal('show');
                });

                // Create the dynamic element '#test-element'
            });
        </script>
    </body>
</html>
