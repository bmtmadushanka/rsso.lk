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
            <div class="container">
                <div class="section-header">
                    <h2>We Are Open To Accept Your Request</h2>
                  
                </div>
                <form class="contactForm" action="{{ route('make.payment') }}" method ="POST">
                @csrf
                  
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label>Request Type (ඉල්ලීම් වර්ගය)</label>
                            <select name="project_category" id="project_category" class="form-control">
                                @foreach($category as $id => $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                            </select>                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label>First Name (මුල් නම)</label>
                            <input type="text" class="form-control" name="fname" placeholder="Your First Name" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Last Name (අවසන් නම)</label>
                            <input type="text" class="form-control" name="lname" placeholder="Your Last Name" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label>Request Location (ස්ථානය)</label>
                            <input type="text" class="form-control" name="address" placeholder="Request Location" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label>Mobile Number (දුරකථන අංකය)</label>
                            <input type="text" class="form-control" name="mobile" placeholder="Your Mobile" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label>NIC Number (ජාතික හැඳුනුම්පත් අංකය)</label>
                            <input type="text" class="form-control" name="nic" placeholder="Your NIC" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label>Extra Details (අමතර විස්තර)</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label>Attachment (ඇමුණුම)</label>
                            <input type="file" class="form-control" name="file" placeholder="Extra Document" />
                        </div>
                    </div>
                    <div class="form-row">
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <button class="btn btn-warning" type="submit" style="margin-left: 5px;">Send Request</button>
                        </div>
                    </div>
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
