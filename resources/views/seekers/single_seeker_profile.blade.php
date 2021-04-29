@extends('layouts.default')
@section('content')

<div class="title-bar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<ol class="title-bar-text">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$seeker->first_name}} Profile</li>
</ol>
</div>
</div>
</div>
</div>


<main class="browse-section">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-4">
<div class="account_dt_left">
<div class="job-center-dt">
<img src="/images/{{$seeker->user->user_image}}" alt="">
<div class="job-urs-dts">
<h4>{{$seeker->first_name}} {{$seeker->last_name}}</h4>
<span>UX Designer</span>
<div class="avialable">{{$seeker->availability}}</div>
</div>
<ul class="user_btns">
<li><button class="hire_btn" type="button">Hire Me</button></li>
<!-- <li><button class="hire_btn" type="button">Message</button></li> -->
</ul>
</div>


<div class="rlt_section">
<div class="rtl_left">
<h6>Rating</h6>
</div>
<div class="rtl_right">
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span>4.9</span>
</div>
</div>
</div>
<div class="rlt_section">
<div class="rtl_left">
<h6>Location</h6>
</div>
<div class="rtl_right">
<span><i class="fas fa-map-marker-alt lc_icon"></i> {{$seeker->location}}</span>
</div>

<ul class="rlt_section2">
<li>
<div class="rtl_left2">
<h6>Hourly Rate</h6>
</div>
<div class="rtl_right2">
<span>$50 / hr</span>
 </div>
</li>

<li>
<div class="rtl_left2">
<h6>Experenice</h6>
</div>
<div class="rtl_right2">
<span>5 Year</span>
</div>
</li>
<li>
<div class="rtl_left2">
<h6>Job Done</h6>
</div>
<div class="rtl_right2">
<span>85</span>
</div>
</li>
</ul>
</div>
<div class="social_section3 mb80">
<div class="social_leftt3">
<h6>Contact Social Account</h6>
</div>
<ul class="social_accounts">
<li><a href="#" class="social_links"><i class="fab fa-facebook-f f1"></i>http://facebook.com/johndoe</a></li>
<li><a href="#" class="social_links"><i class="fab fa-twitter t1"></i>http://twitter.com/johndoe</a></li>
<li><a href="#" class="social_links"><i class="fab fa-linkedin-in l1"></i>http://linkedin.com/johndoe</a></li>
<li><a href="#" class="social_links"><i class="fab fa-dribbble d1"></i>http://dribbble.com/johndoe</a></li>
<li><a href="#" class="social_links"><i class="fab fa-behance b1"></i>http://behance.net/johndoe</a></li>
<li><a href="#" class="social_links"><i class="fab fa-github g1"></i>http://github.com/johndoe</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-9 col-md-8 mainpage">
<div class="account_tabs">
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" href="other_freelancer_profile.html">Profile</a>
</li>
<li class="nav-item">
<a class="nav-link" href="other_freelancer_portfolio.html">Portfolio</a>
</li>
<li class="nav-item">
<a class="nav-link" href="other_freelancer_reviews.html">Reviews</a>
</li>
</ul>
</div>
<div class="view_chart">
<div class="view_chart_header">
<h4>About</h4>
</div>
<div class="view_chart_body">
<p class="user_about_des">{{$seeker->about}}</p>
</div>
</div>
<div class="view_chart">
<div class="view_chart_header">
<h4>Skills</h4>
</div>
<div class="view_chart_body">
<div class="job-skills">
<a href="#">HTML</a>
<a href="#">CSS</a>
<a href="#">Wordpress</a>
<a href="#">Javascript</a>
<a href="#">Jquery</a>
<a href="#">Plugins</a>
</div>
</div>
</div>
<div class="view_chart">
<div class="view_chart_header">
<h4>Language</h4>
</div>
<div class="view_chart_body">
<div class="job-skills">
<a href="#" class="more-skills">English</a>
<a href="#" class="more-skills">Punjabi</a>
<a href="#" class="more-skills">Hindi</a>
</div>
</div>
</div>
</div>
</div>
</div>
</main>


@endsection