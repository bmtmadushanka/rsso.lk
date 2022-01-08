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
                            Welcome to the website of the Raigampura Social Services Organaization, Welfare and Social Insurance.
                            The website of the RSSO offers easy access to information in connection with the rights and obligations of employees and employers in the field of Social Security.
                            </p>
                            <a class="btn" href="{{route('about')}}">Read More</a>
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
                            <a class="btn" href="{{route('about')}}">Read More</a>
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
                            <a class="btn" href="{{route('about')}}">Read More</a>
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
                    we respect you as a family for your donations.children is our future we always protect them 
                    </p>
                </div>
                <a class="btn" href="{{ route('make.payment') }}" style="background: #f1a212f7;border-radius: 30px;">Donate Now</a>
            </div>
        </div>
        <!-- Call To Action End -->        
        
        <!-- Portfolio Start -->
        <div class="portfolio">
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
            <div style="text-align: center;">
                <a class="btn" href="{{route('services')}}" style="background-color: #999999;">Show More</a>
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
                        <p>Our Members</p>
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
                    Everyone says it, but in our case it’s true: our team is the secret to our success. 
                    </p>
                </div>

                <div class="row">
                    @foreach($staff as $data)
                        <div class="col-lg-3 col-sm-6 team-item">
                            <div class="team-img">
                                <img src="public/images/staff/{{$data->photo}}" class="img-fluid" alt="Team Member">
                                <div class="team-social">
                                    <button class="link-details staff-view" title="More Details" data-staff-name="{{$data->name}}" data-staff-address="{{$data->address}}"  data-staff-email="{{$data->email}}" data-staff-photo="{{$data->photo}}" data-staff-profession="{{$data->role}}" data-staff-description="{{$data->description}}"><i class="ion-md-eye"></i></button>
                                </div>
                            </div>
                            <div class="team-info">
                                <h3>{{$data->name}}</h3>
                                <p>{{$data->role}}</p>
                            </div>
                        </div>
                    @endforeach
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
                        What they think about us 
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
                    <h2>Our Partners</h2>
                    <p>
                        Who are the supporters behind us  
                    </p>
                </div>

                <div class="owl-carousel clients-carousel">
                    <img src="img/client-1.jpeg" alt="Client Logo">
                    <img src="img/client-2.jpg" alt="Client Logo">
                    <img src="img/client-3.jpg" alt="Client Logo">
                    <img src="img/client-4.jpg" alt="Client Logo">
                    <img src="img/client-5.jpg" alt="Client Logo">
                    <!-- <img src="img/client-6.jpg" alt="Client Logo">
                    <img src="img/client-7.jpg" alt="Client Logo">
                    <img src="img/client-8.jpg" alt="Client Logo"> -->
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7925.202649922006!2d80.0363072!3d6.696199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8f272a2e65cfce2!2zNsKwNDEnNDUuNCJOIDgwwrAwMicxMC45IkU!5e0!3m2!1sen!2slk!4v1640969728862!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Team End -->
        <div class="modal" tabindex="-1" role="dialog" id="staff-modal">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Staff Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="main-body">
                
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="" alt="Admin" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                        <h4 class="staff-name">John Doe</h4>
                                        <p class="text-secondary mb-1 staff-profession">Full Stack Developer</p>
                                        <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                        <!-- <button class="btn btn-primary">Follow</button>
                                        <button class="btn btn-outline-primary">Message</button> -->
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- <div class="card mt-3">
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                        <span class="text-secondary">https://bootdey.com</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                                        <span class="text-secondary">bootdey</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                        <span class="text-secondary">@bootdey</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                        <span class="text-secondary">bootdey</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                        <span class="text-secondary">bootdey</span>
                                    </li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary staff-name">
                                            Kenneth Valdez
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary staff-email">
                                            fip@jukmuh.al
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Phone</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary"><span style='font-family: "Times New Roman", Times, serif' class="staff-office-phone">
                                            (239) 816-9029 </span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Mobile</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary staff-mobile-phone">
                                            (320) 380-4539
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary staff-address">
                                            Bay Area, San Francisco, CA
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- <div class="row">
                                            <div class="col-sm-12">
                                            <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>

                                <!-- <div class="row gutters-sm">
                                    <div class="col-sm-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                        <small>Web Design</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Website Markup</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>One Page</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Mobile Template</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Backend API</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                        <small>Web Design</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Website Markup</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>One Page</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Mobile Template</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Backend API</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
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
                    $('.img-artical').attr('src','public/images/services/'+photo)
                    $('#service-modal').modal('show');
                });

                // Create the dynamic element '#test-element'
                $(document).on("click",".staff-view",function() {
                    var name = $(this).attr('data-staff-name');
                    var address = $(this).attr('data-staff-address');
                    var mobile_phone = '**********';
                    var office_phone = '034-2252696';
                    var profession = $(this).attr('data-staff-profession');
                    var description = $(this).attr('data-staff-description');
                    var email = $(this).attr('data-staff-email');
                    var photo = $(this).attr('data-staff-photo');
                    $('.staff-name').text(name);
                    $('.staff-email').text(email);
                    $('.staff-office-phone').text(office_phone);
                    $('.staff-mobile-phone').text(mobile_phone);
                    $('.staff-address').text('No,120 Thalawa, Haltota Bandaragama');
                    $('.staff-profession').text(profession);
                    $('.rounded-circle').attr('src','public/images/staff/'+photo)
                    $('#staff-modal').modal('show');
                });
            });
        </script>
    </body>
</html>
