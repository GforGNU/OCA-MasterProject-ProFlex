
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


<div class="col-lg-12">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="manage_bidders">
<div class="view_chart">
<div class="view_chart_header">
<h4>Manage Bidders</h4>
</div>
<div class="job_bid_body">
<ul class="all_applied_jobs jobs_bookmarks">

@foreach($bids as $bid)

@if($bid->is_confirmed !== 0)
<li>


<div class="applied_candidates_item">
<div class="row">
<div class="col-xl-7">
<div class="applied_candidates_dt">
<div class="candi_img">
@foreach($users as $user)
@if($bid->user_id == $user->id)
<img src="/images/{{$user->user_image}}" alt="">
</div>
<div class="candi_dt">


<a href="#">{{$user->name}}</a>
@endif
@endforeach
<div class="candi_cate">Job: {{$bid->job_name}}</div>
<div class="rating_candi">Rating
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
</div>
</div>
<div class="col-xl-5">
<ul class="fixed_delivery">
<li>
<div class="fpd150">
<span>$1600</span>
<p>Fixed Price</p>
</div>
</li>
<li>
<div class="fpd150">
<span>5 Days</span>
<p>Delivery Time</p>
</div>
</li>
</ul>
</div>
</div>
<div class="btn_link24">
<form method="POST" action="activities/{{$bid->id}}">
@csrf
{{ method_field('PATCH') }}

<input name="is_confirmed"  style="display:none" >
@if($bid->is_confirmed == 1)
<button   class="apled_btn50" style="float:left ; margin-right:5px; background-color:green">Accepted</button>
@else
<button type="submit"  class="apled_btn50" style="float:left ; margin-right:5px">Accept</button>
@endif

</form>
@if($bid->is_confirmed !== 1)
<form method="POST" action="decline/{{$bid->id}}" >
@csrf
{{ method_field('PATCH') }}

<input name="is_confirmed" value="0" style="display:none"  >
<button type="submit"  class="apled_btn50 btn-danger" style="float:left">Decline</button>


</form>
@endif
</div>

</li>
@endif
@endforeach
</ul>
</div>
</div>
</div>
</div>
</div>


@endsection