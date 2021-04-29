


<main class="browse-section">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-4">
<div class="account_dt_left">
<div class="job-center-dt">
<img src="images/homepage/candidates/img-1.jpg" alt="">
<div class="job-urs-dts">
<div class="dp_upload">
<input type="file" id="file">
<label for="file">Upload Photo</label>
</div>
<h4>{{ Auth::user()->name }}</h4>
<span>{{ Auth::user()->seeker->tagline }}</span>
<div class="avialable">Available {{ Auth::user()->seeker->availability }}<a href="#"><i class="far fa-edit"></i></a></div>
</div>
</div>
<div class="my_websites">
<ul>
<li><a href="#" class="web_link"><i class="fas fa-globe"></i>www.companysite.com</a></li>
<li><a href="#" class="web_link"><i class="far fa-edit"></i>www.blogsite.com</a></li>
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
<span><i class="fas fa-map-marker-alt lc_icon"></i>{{ Auth::user()->seeker->location }}</span>
</div>
<div class="my_location">
<div id="map"></div>
</div>

</div>

</div>
</div>

<div class="col-lg-9 col-md-8 mainpage">
<div class="account_heading">
<div class="account_hd_left">
<h2>Manage Your Account</h2>
</div>

</div>
<div class="account_tabs">
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link" href="my_freelancer_dashboard.html">Dashboard</a>
</li>
<li class="nav-item">
<a class="nav-link" href="my_freelancer_profile.html">Profile</a>
</li>

<li class="nav-item">
<a class="nav-link" href="my_freelancer_notifications.html">Notifications</a>
</li>
<li class="nav-item">

<a class="nav-link active" href="/seekerBids/{{$seeker}}">Bids</a>


</li>
<li class="nav-item">
<a class="nav-link" href="my_freelancer_reviews.html">Reviews</a>
</li>

<li class="nav-item">
<a class="nav-link" href="my_freelancer_setting.html"><i class="fas fa-cog"></i></a>
</li>
</ul>
</div>



