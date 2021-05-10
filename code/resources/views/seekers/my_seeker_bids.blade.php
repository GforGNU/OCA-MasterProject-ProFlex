@extends('layouts.dashboard')

@section('content')

<!-- <div class="jobs_manage">
<div class="row">
<div class="col-lg-3">
<div class="jobs_tabs">
<ul class="nav job_nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" href="#manage_bids" id="manage-bids-tab" data-toggle="tab">Your Bids</a>
</li>

<li class="nav-item job_nav_item">
<a class="nav-link" href="#active_bids" id="active-bids-tab" data-toggle="tab">My Active Bids</a>
</li>

</ul>
</div>
</div> -->



<!--manage bids-->
<div class="col-lg-12">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="manage_bids" role="tabpanel">
<div class="view_chart">
<div class="view_chart_header">
<h4>Your Bids</h4>
</div>
<div class="job_bid_body">
<ul class="all_applied_jobs jobs_bookmarks">

@foreach($seeker->activityuser as $appliedJobs)


<li>

@foreach($jobs as $job)
<div class="applied_item">
@if($appliedJobs->job_post_id == $job->id)
<div>
<a href="#">{{$job->job_name}}</a>


@if(is_null($appliedJobs->is_confirmed))
<span class="badge_alrt">In Progress</span>
@endif
@if($appliedJobs->is_confirmed === 0)
<span class="badge_alrt">Declined</span>
@endif
@if($appliedJobs->is_confirmed === 1)
<span class="badge_alrt">Accepted</span>

@endif
@endif
</div>
@endforeach

<!-- <p>{{$appliedJobs->job_post_id}}</p> -->






<div class="bid_dt12">
<div class="bid_dt13">
<span>3</span><ins>Bids</ins>
<span>$120</span><ins>Avg. Bid</ins>
<span>$150 - $250</span><ins>Hourly Rate</ins>
</div>
</div>

</div>

</li>


@endforeach

</ul>
</div>
</div>
</div>


<!--my active bids-->

<div class="tab-pane fade" id="active_bids">
<div class="view_chart">
<div class="view_chart_header">
<h4>My Active Bids</h4>
</div>
<div class="job_bid_body">
<ul class="all_applied_jobs jobs_bookmarks">
<li>
<div class="applied_item">
<a href="#">Travel Wordpress Theme</a>
<div class="bid_dt12">
<div class="bid_dt13">
<span>$1800</span><ins>Fixed Price</ins>
<span>15 Days</span><ins>Delivery Time</ins>
</div>
</div>
<div class="btn_link23">
<button class="apled_btn60">View Project</button>
<a href="#" class="edit_icon1"><i class="far fa-edit"></i></a>
<a href="#" class="delete_icon1"><i class="far fa-trash-alt"></i></a>
</div>
</div>
</li>
<li>
<div class="applied_item">
<a href="#">Wordpress Installation Issues</a>
<div class="bid_dt12">
<div class="bid_dt13">
<span>$50</span><ins>Hourly Rate</ins>
<span>1 Day</span><ins>Delivery Time</ins>
</div>
</div>
<div class="btn_link23">
<button class="apled_btn60">View Project</button>
<a href="#" class="edit_icon1"><i class="far fa-edit"></i></a>
<a href="#" class="delete_icon1"><i class="far fa-trash-alt"></i></a>
</div>
</div>
</li>
<li>
<div class="applied_item">
<a href="#">Travel Psd Template</a>
<div class="bid_dt12">
<div class="bid_dt13">
<span>$500</span><ins>Fixed Price</ins>
<span>7 Days</span><ins>Delivery Time</ins>
</div>
</div>
<div class="btn_link23">
<button class="apled_btn60">View Project</button>
<a href="#" class="edit_icon1"><i class="far fa-edit"></i></a>
<a href="#" class="delete_icon1"><i class="far fa-trash-alt"></i></a>
</div>
</div>
</li>
<li>
<div class="applied_item">
<a href="#">Travel Wordpress Theme</a>
<div class="bid_dt12">
<div class="bid_dt13">
<span>$1800</span><ins>Fixed Price</ins>
<span>15 Days</span><ins>Delivery Time</ins>
</div>
</div>
<div class="btn_link23">
<button class="apled_btn60">View Project</button>
<a href="#" class="edit_icon1"><i class="far fa-edit"></i></a>
<a href="#" class="delete_icon1"><i class="far fa-trash-alt"></i></a>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>





@endsection