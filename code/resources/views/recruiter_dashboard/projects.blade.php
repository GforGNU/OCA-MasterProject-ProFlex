@extends('layouts.dashboard')

@section('content')



<div class="jobs_manage">
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="row">
<!-- <div class="col-lg-3">
<div class="jobs_tabs">
<ul class="nav job_nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" href="#manage_jobs" id="manage-job-tab" data-toggle="tab">Manage Job Posts</a>
</li>

<li class="nav-item job_nav_item">
<a class="nav-link" href="#applied_candidates" id="applied-candidate-tab" data-toggle="tab">Applied Candidates</a>
</li>

</ul>
</div>
</div> -->
<div class="col-lg-12">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="manage_jobs" role="tabpanel">
<div class="view_chart">
<div class="view_chart_header">
<h4>Manage Jobs</h4>
</div>
<div class="job_bid_body">
<ul class="all_applied_jobs jobs_bookmarks">
@foreach($post as $p)
<li>
<div class="applied_item">
<a href="#">{{$p->job_name}}</a>
<span class="badge_alrt">Active</span>

<ul class="view_dt_job">
<li><div class="vw1254"><i class="far fa-clock"></i>Posted on {{$p->created_at}}</div></li>
<li><div class="vw1254"><i class="far fa-clock"></i>Expiring on 3 September 2021</div></li>
</ul>
<div class="btn_link23">
<button class="apled_btn60"><span class="badge badge-light">{{$count->count()}}</span>APPLIED CANDIDATES</button>
<a href="#" class="delete_icon1"><i class="far fa-trash-alt"></i></a>
</div>
</div>
</li>
@endforeach

</ul>
</div>
</div>
</div>

<div class="tab-pane fade" id="applied_candidates">
<div class="view_chart">
<div class="view_chart_header">
<h4>Applied Candidates</h4>
</div>
<div class="job_bid_body">
<ul class="all_applied_jobs jobs_bookmarks">

<li>
<div class="applied_candidates_item">
<div class="applied_candidates_dt">
<div class="candi_img">
<img src="images/homepage/candidates/img-1.jpg" alt="">
</div>
<div class="candi_dt">
<a href="#">John Doe</a>
<div class="candi_cate">UX Designer</div>
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
<div class="btn_link24">
<button class="apled_btn50">Download CV</button>
<button class="apled_btn70">Message</button>
<a href="#" class="delete_icon1"><i class="far fa-trash-alt"></i></a>
</div>
</div>
</li>
<li>
<div class="applied_candidates_item">
<div class="applied_candidates_dt">
<div class="candi_img">
<img src="images/homepage/candidates/img-2.jpg" alt="">
</div>
<div class="candi_dt">
<a href="#">Rock William</a>
<div class="candi_cate">Front End Developer</div>
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
<div class="btn_link24">
<button class="apled_btn50">Download CV</button>
<button class="apled_btn70">Message</button>
<a href="#" class="delete_icon1"><i class="far fa-trash-alt"></i></a>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>

</div>
</div>
</div>
</div>





@endsection