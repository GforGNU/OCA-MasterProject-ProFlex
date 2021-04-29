@extends('layouts.default')
@section('content')
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


<div class="apply_job_form">
<div class="modal fade" id="applyjobModal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-jb" role="document">
<div class="modal-content">
<div class="modal-header">

<h5 class="modal-title" id="exampleModalLabel">Apply Job Now</h5>


<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<form method="POST" action="{{action('JobPostActivityController@store')}}">
@csrf
<div class="modal-body">
<div class="jb_frm">
<h3>Attach File With CV C Apply by Jobby Profile</h3>
<div class="form_inputs">
<div class="form-group">
	@auth
<input type="text" class="job-input" placeholder="{{auth()->user()->name}}">
</div>
<div class="form-group">
<input type="email" class="job-input" placeholder="{{auth()->user()->email}}">
</div>
@endauth
<input name="job_post_id" style="display:none" class="job-input" value="{{$project->id}}" placeholder="{{$project->id}}"> 
<div class="file-form">
<input type="file" id="file">
<label for="file">Upload File</label>
<p>Upload your Bid file. Max file size : 3MB</p>
</div>

<div class="apply_btn150">

<!-- <form action="JobPostActivityController@store"> -->
<button class="apply_job50" type="submit">APPLY NOW</button>

<button class="apply_job_close" type="button" data-dismiss="modal">CANCEL</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>

<main class="browse-section">
<div class="container">
<div class="row">
<div class="col-lg-9 col-md-8">
<div class="view_details">
<ul>
<li>
<div class="vw_items">
<i class="fas fa-eye"></i>
<div class="vw_item_text">
<h6>Views</h6>
<span>135</span>
</div>
</div>
</li>
<li>
<div class="vw_items">
<i class="fas fa-shield-alt"></i>
<div class="vw_item_text">
<h6>Verify</h6>
<span>Yes</span>
</div>
</div>
</li>
<li>
<div class="vw_items">
<i class="far fa-money-bill-alt"></i>
<div class="vw_item_text">
<h6>Budget</h6>
<span>$500 - $2000</span>
</div>
</div>
</li>
<li>
<div class="vw_items">
<i class="far fa-clock"></i>
<div class="vw_item_text">
<h6>Posted Date</h6>
<span>4 days ago</span>
</div>
</div>
</li>
</ul>
</div>
<div class="job-item ptrl_2 mt-20">
<div class="job-top-dt">
<div class="job-left-dt">
<img src="/images/{{$project->user->user_image}}" alt="">
<div class="job-ut-dts">
<a href="#"><h4>{{$project->job_name}} </h4></a>
</div>
</div>
<div class="job-right-dt">
<div class="job-price">$500 - $2000</div>
</div>
</div>
<div class="job-des-dt">
<!-- <h4>I Need a Travel Psd Template</h4> -->
<p>{{$project->job_description}}</p>
<div class="job-skills">
<a href="#">UX</a>
<a href="#">UI</a>
<a href="#">Photoshop</a>
<a href="#">Illustrator</a>
<a href="#">Corel Draw</a>
<a href="#">Graphic Design</a>
</div>
</div>
<div class="job_dts">
<h4>Attachments</h4>
<ul class="download_files">
<li>
<div class="dwn_fls">
<div class="dwn-header">
<h6>Project Briefing Details</h6>
</div>
<div class="dwn-footer">
<span>PDF</span>
<button class="download_button"><i class="fas fa-download"></i></button>
</div>
</div>
</li>
<li>
<div class="dwn_fls">
<div class="dwn-header">
<h6>Images</h6>
</div>
<div class="dwn-footer">
<span>Zip</span>
<button class="download_button"><i class="fas fa-download"></i></button>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
@auth
<div class="col-lg-3 col-md-4 mainpage">
<div class="total_days mtp_30">4 days 5 hours left</div>
<h4 class="bid_title">Bid Now This Job</h4>
<div class="bid_amount">
<div class="fltr-items-heading">
<div class="fltr-item-left">
<h6>Set Your Minimal Rate <span>($)</span></h6>
</div>
<div class="fltr-item-right">
<a href="#">Clear</a>
</div>
</div>
<div class="filter-dd">
<div class="rg-slider">
<input class="rn-slider slider-input" type="hidden" value="5,500" />
</div>
</div>
</div>
<div class="dlvry_days">
<div class="fltr-items-heading">
<div class="fltr-item-left">
<h6>Set Your Delivery Time</h6>
</div>
<div class="fltr-item-right">
<a href="#">Clear</a>
</div>
</div>
<div class="ui fluid search selection dropdown skills-search">
<input name="tags" type="hidden" value="">
<i class="dropdown icon"></i>
<input class="search" autocomplete="off" tabindex="0">
<span class="sizer" style=""></span>
<div class="default text">Select Days</div>
<div class="menu transition hidden" tabindex="-1">
<div class="item selected" data-value="Job1">5 Days</div>
<div class="item" data-value="day1">10 Days</div>
<div class="item" data-value="day2">15 Days</div>
<div class="item" data-value="day3">20 Days</div>
<div class="item" data-value="day4">25 Days</div>
<div class="item" data-value="day5">30 Days</div>
<div class="item" data-value="day6">50 Days</div>
<div class="item" data-value="day7">70 Days</div>
<div class="item" data-value="day8">120 Days</div>
</div>
</div>
</div>

<button class="apply_job" type="button" data-toggle="modal" data-target="#applyjobModal">Place a bid</button>
<div class="bookmark_rt"><button class="bookmark1 mr-3" title="bookmark"><i class="fas fa-heart"></i></button>BOOKMARK</div>

<ul class="social-links">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
@endauth
@guest
<div class="col-lg-3 col-md-4 mainpage">
<div class="total_days mtp_30">4 days 5 hours left</div>
<h4 class="bid_title"><a href="/register">Register to Bid This Job Now</a></h4>
<div class="bid_amount">
<div class="fltr-items-heading">
<div class="fltr-item-left">
<!-- <button  type="button" href="/register" >Register</button> -->

</div>
</div>
</div>
</div>

@endguest
</div>
</div>
</div>
</main>

@endsection

<button onclick="topFunction()" id="pageup" title="Go to top"><i class="fas fa-arrow-up"></i></button>


<script src="js/jquery.min.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="js/i18n/datepicker.en.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/OwlCarousel/owl.carousel.js"></script>
<script src="vendor/semantic/semantic.min.js"></script>
<script src="js/jquery.range-min.js"></script>
<script src="js/custom1.js"></script>
<script>
			window.oncontextmenu = function () {
				return false;
			}
			$(document).keydown(function (event) {
				if (event.keyCode == 123) {
					return false;
				}
				else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
					return false;
				}
			});
		</script>