@inject('request','Illuminate\Http\Request')

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a href="index.html" class="navbar-brand">
        <img src="img/logo.png" alt="Logo">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="margin-right: 50px;">
        <div class="navbar-nav ml-auto">
            <a href="{{route('index')}}" class="nav-item nav-link {{ (Request::segment(1) == '') ? 'active' : '' }}">Home</a>
            <a href="{{route('staffs')}}" class="nav-item nav-link {{ (Request::segment(1) == 'staff') ? 'active' : '' }}">Staff</a>
            <a href="{{route('members')}}" class="nav-item nav-link {{ (Request::segment(1) == 'members') ? 'active' : '' }}">Members</a>
            <a href="{{route('donations')}}" class="nav-item nav-link {{ (Request::segment(1) == 'donations') ? 'active' : '' }}">Donations</a>
            <a href="{{route('services')}}" class="nav-item nav-link {{ (Request::segment(1) == 'services') ? 'active' : '' }}">Service</a>
            <a href="{{route('about')}}" class="nav-item nav-link {{ (Request::segment(1) == 'about') ? 'active' : '' }}">About Us</a>
            <a href="{{route('contact')}}" class="nav-item nav-link {{ (Request::segment(1) == 'contact-us') ? 'active' : '' }}">Contact Us</a>
            <a href="{{route('need-help')}}" class="nav-item nav-link {{ (Request::segment(1) == 'need-help') ? 'active' : '' }}">Need Help</a>
            <a href="{{route('member-register')}}" class="nav-item nav-link {{ (Request::segment(1) == 'apply-now') ? 'active' : '' }}">Join Now</a>
            <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>

        </div>
    </div>
</nav>