<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gambolthemes.net/html-items/jobby/jobby-freelancer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 21:59:40 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, shrink-to-fit=9">
<meta name="description" content="ProFlex - Connecting Professionals Flexibally">
<meta name="author" content="Lojain Nahhas">
<title>ProFlex - Home</title>

<link rel="icon" type="image/png" href="{{ asset('images/logopng.png')}}">

<link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
<link href="{{ asset('css/datepicker.min.css')}}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<link href="{{ asset('vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
<link href="{{ asset('vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="{{asset('vendor/semantic/semantic.min.css')}}">
</head>
<body>

<div class="modal srch-model fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-xl" role="document">
<div class="modal-content">
<div class="modal-header sheader">
<button type="button" class="close srch-close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<input type="text" class="srch-input" placeholder="Search Keywords...">
</div>
</div>
</div>
</div>


<header>
<div class="top-header">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="top-header-full">
<div class="top-left-hd">
<ul>
<li><div class="wlcm-text">Welcome to Jobby</div></li>
<li>
<div class="lang-icon dropdown">
<i class="fas fa-globe ln-glb"></i>
<a href="#" class="icon15 dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
EN <i class="fas fa-caret-down p-crt"></i>
</a>
<div class="dropdown-menu lanuage-dropdown dropdown-menu-left">
<a class="link-item" href="#">EN</a>
<a class="link-item" href="#">DE</a>
<a class="link-item" href="#">RU</a>
<a class="link-item" href="#">ES</a>
<a class="link-item" href="#">FR</a>
</div>
</div>
</li>
</ul>
</div>


@guest
<div class="top-right-hd">
<a href="{{ route('login') }}" class="login_btn"><i class=""></i>  |   {{ __('Login') }}  </a>
<span>  </span>
</div>
@if (Route::has('register'))
<div class="top-right-hd">
<a href="{{ route('register') }}" class="login_btn"><i class=""></i>{{ __('Register') }}</a>
</div>
                            @endif
@else
<div class="top-right-hd">
<ul>


@auth
<li class="dropdown">
<a href="#" class="icon14 dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
<i class="fas fa-bell"></i><div class="circle-alrt"></div>
</a>
<div class="dropdown-menu message-dropdown dropdown-menu-right">
<div class="user-request-list">
<div class="request-users">
<div class="user-request-dt">
<a href="#">
<div class="noti-icon"><i class="fas fa-users"></i></div>


<div class="user-title1">Rock William </div>
<span>applied for a <ins class="noti-p-link">ggg}</ins>.</span>
</a>
</div>
</div>
</div>

<div class="user-request-list">
<a href="my_freelancer_notifications.html" class="view-all">View All Notifications</a>
</div>
</div>
</li>
@endauth
<li>
<div class="account order-1 dropdown">
<a href="#" class="account-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
<div class="user-dp">
@if(is_null(Auth::user()->user_image)) 
<img src="/images/default.png"> 
@else  

<img src='{{url("images/".Auth::user()->user_image)}}' class="img-fluid  rounded-circle" alt="">
@endif 
</div>
<span>{{ Auth::user()->name }}</span>
<i class="fas fa-sort-down"></i>
</a>
@auth
<div class="dropdown-menu account-dropdown dropdown-menu-right">
@if(Auth::user()->user_type_id == 1)
<a class="link-item" href="/companies">Dashboard</a>
@else
<a class="link-item" href="/seekers">Dashboard</a>
@endif
<a class="link-item" href="my_freelancer_setting.html">Setting</a>
<a class="link-item" href="my_freelancer_messages.html">My Messages</a>
<a class="link-item" href="my_freelancer_jobs.html">My Jobs</a>
<a class="link-item" href="my_freelancer_bids.html">My Bids</a>
<a class="link-item" href="my_freelancer_portfolio.html">My Portfolio</a>
<a class="link-item" href="my_freelancer_bookmarks.html">My Bookmarks</a>
<a class="link-item" href="my_freelancer_payments.html">Payments</a>
<a class="link-item" href="/logout"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
</div>
@endauth
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
@endguest
<div class="sub-header">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
<a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="/home"><img src="{{asset('images/proflex.png')}}" style="width:10em" alt=""></a>
<button class="navbar-toggler align-self-start" type="button">
<i class="fas fa-bars"></i>
</button>
<div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
<ul class="navbar-nav align-self-stretch">
<li class="nav-item active">
<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item dropdown">
<a href="/allposts" class="link-item nav-link">Browse Projects</a>

</li>

<li class="nav-item dropdown">
<a href="/allcompanies" class="link-item nav-link">Browse Companies</a>

</li>
<li class="nav-item dropdown">
<a class="link-item nav-link" href="/allseekers">Browse Freelancers</a>
<!-- <div class="dropdown-menu pages-dropdown">
<a class="link-item" href="/freelancers">Browse Freelancers</a>
<a class="link-item" href="/other_freelancer_profile">Freelancer Profile</a>
</div> -->
</li>

</ul>

<a href="#" class="search-link" role="button" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a>
@auth
@if(Auth::user()->user_type_id == 1)
<a href="/projects/create" class="add-post">Post a Project</a>
@endif
@endauth
</div>
<div class="responsive-search order-1">
<input type="text" class="rsp-search" placeholder="Search...">
<i class="fas fa-search r-sh1"></i>
</div>
</nav>
<div class="overlay"></div>
</div>
</div>
</div>
</div>
</header>
