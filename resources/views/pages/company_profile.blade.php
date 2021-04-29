@extends('layouts.default')
@section('content')


<div class="title-bar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<ol class="title-bar-text">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page"> Company Profile</li>
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
<img src="/images/{{$company->user->user_image}}" alt="">
<div class="job-urs-dts">
<h4>{{$company->company_name}}</h4>
</div>
<ul class="user_btns">
<li><button class="hire_btn" type="button">Message</button></li>
</ul>
</div>
<div class="my_websites">
<ul>
<li><a href="#" class="web_link"><i class="fas fa-globe"></i>{{$company->company_website}}</a></li>
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
<h6>Buseiness Stream</h6>
</div>
<div class="rtl_right">
<span><i class=" "></i> {{$company->business_stream}}</span>
</div>
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
<a class="nav-link active" href="other_company_profile.html">Profile</a>
</li>

<li class="nav-item">
<a class="nav-link" href="other_company_reviews.html">Reviews</a>
</li>
</ul>
</div>
<div class="view_chart">
<div class="view_chart_header">
<h4>About</h4>
</div>
<div class="view_chart_body">
<p class="user_about_des">{{$company->profile_description}}</p>
</div>
</div>



<div class="view_chart">
<div class="view_chart_header">
<h4>Projects Posts</h4>
<div class="tab-content">
<div class="tab-pane active" id="tab-1">
<div class="row  view-group" id="products">

@foreach($company->jobPost as $post)



<div class="lg-item col-lg-6 col-xs-6 grid-group-item1">
<div class="job-item mt-30">
<div class="job-top-dt">
<div class="job-left-dt">
    
<img src="/images/{{$post->user->user_image}}" alt="">
<div class="job-ut-dts">
<a href="#"><h4>{{$post->job_name}}</h4></a>

</div>
</div>
<div class="job-right-dt">

</div>
</div>
<div class="job-des-dt">

<p>{{$post->job_description}}.</p>
<div class="job-skills">
<a href="#">UX</a>
<a href="#">UI</a>
<a href="#">Photoshop</a>
<a href="#" class="more-skills">+4</a>
</div>
</div>
<div class="job-buttons">
<ul class="link-btn">
<li><a href="#" class="link-j1" title="Apply Now">Apply Now</a></li>
<li><a href="/jobpost/{{$post->id}}" class="link-j1" title="View Job">View Project</a></li>
 <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
</ul>
</div>
</div>
</div>






@endforeach
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</main>
@endsection