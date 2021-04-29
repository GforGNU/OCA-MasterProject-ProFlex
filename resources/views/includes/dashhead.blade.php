


<main class="browse-section">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-4">
<div class="account_dt_left">
<div class="job-center-dt">
@if(is_null(Auth::user()->user_image)) 
<img src="/images/default.png"> 
@else 
<img src='{{url("images/".Auth::user()->user_image)}}' class="img-fluid  rounded-circle"  alt="Responsive image">
@endif
<div class="job-urs-dts">
<form method="POST" action="{{ action('UserController@update')}}" enctype="multipart/form-data">
{{method_field('PATCH')}}
@csrf
<div class="dp_upload">

<input type="file" class="form-control-file" id="file" name="user_image">
<label for="file">Choose File </label>

<button class="apled_btn60" type='submit' >upload</button>
</div>
</form>
<h4>{{ Auth::user()->name }}</h4>
@if(Auth::user()->user_type_id == 2)
<span>{{ Auth::user()->seeker->tagline }}</span>
@else
<span>{{ Auth::user()->company->company_name }}</span>
@endif

@if(Auth::user()->user_type_id == 2)
<div class="avialable">Available {{ Auth::user()->seeker->availability }}<a href="#"><i class="far fa-edit"></i></a></div>
@endif
</div>
</div>
<div class="my_websites">
<ul>
<li><a href="#" class="web_link"><i class="fas fa-globe"></i>www.companysite.com</a></li>
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
@if(Auth::user()->user_type_id == 2)
<div class="rtl_right">
<span><i class="fas fa-map-marker-alt lc_icon"></i> {{ Auth::user()->seeker->location }}</span>
</div>
@endif
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
<!-- <li class="nav-item">
<a class="nav-link" href="my_freelancer_dashboard.html">Dashboard</a>
</li> -->
<li class="nav-item">

@if(Auth::user()->user_type_id == 2)
<a  class="{{ substr(Request::path(), 0, 7) === 'seekers' ? 'nav-link active' : 'nav-link'}}" id="a-pro" href="/seekers/{{ Auth::user()->seeker->id }}">Profile</a>

@else
<a  class="{{ substr(Request::path(), 0, 9) === 'companies' ? 'nav-link active' : 'nav-link'}}" id="a-pro" href="/companies/{{ Auth::user()->company->id }}">Profile</a>
@endif



</li>

<li class="nav-item">
@if(Auth::user()->user_type_id == 2)
<a  id="a-bid" class="{{ substr(Request::path(), 0, 10) === 'seekerBids' ? 'nav-link active' : 'nav-link'}}" href="/seekerBids">Bids</a>
@else
<a  class="{{ Request::path() === 'bids' ? 'nav-link active' : 'nav-link'}}" id="a-bid"  href="/bids">Bids</a>
@endif
</li>
@if(Auth::user()->user_type_id == 1)
<li class="nav-item">
<a class="{{ Request::path() === 'projects' ? 'nav-link active' : 'nav-link'}}" href="/projects">Posts</a>
</li>
@endif
<li class="nav-item">
<a class="nav-link"  href="my_freelancer_setting.html"><i class="fas fa-cog"></i></a>
</li>
</ul>
</div>


@if(Request::url() === 'your url here')
    // code
@endif
<script>

// function add_class(elem) {
//     // get all 'a' elements
//     var a = document.getElementsByTagName('a');
//     // loop through all 'a' elements
//     for (i = 0; i < a.length; i++) {
//         // Remove the class 'active' if it exists
//         a[i].classList.remove('active')
//     }
//     // add 'active' classs to the element that was clicked
//     elem.classList.add('active');
// }


// function toggleItem(elem) {
//   for (var i = 0; i < elem.length; i++) {
//     elem[i].addEventListener("click", function(e) {
//       var current = this;
//       for (var i = 0; i < elem.length; i++) {
//         if (current != elem[i]) {
//           elem[i].classList.remove('active');
//         } else if (current.classList.contains('active') === true) {
//           current.classList.remove('active');
//         } else {
//           current.classList.add('active')
//         }
//       }
//       e.preventDefault();
//     });
//   };
// }
// toggleItem(document.querySelectorAll('.link'));
</script>


