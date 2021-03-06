@extends('layouts.default')
@section('content')


<div class="title-bar">
<div class="container">
<div class="row">
<div class="col-lg-12 ">
<ol class="title-bar-text">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Browser Freelancers</li>
</ol>
</div>
</div>
</div>
</div>


<main class="browse-section">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-5 " style="margin-top:40px">
<div class="browser-job-filters">
<div class="filter-heading">
<div class="fh-left">
Filters
</div>
<div class="fh-right">
<a href="#">Clear All Filters</a>
</div>
</div>



<div class="fltr-group">
<div class="fltr-items-heading">
<div class="fltr-item-left">
<h6>Job Type</h6>
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
<div class="default text">All Categories</div>
<div class="menu transition hidden" tabindex="-1">
<div class="item selected" data-value="Category1">Choose Category</div>
@foreach ($type as $t)
<div class="item"  data-value="{{$t->job_type}}">{{$t->job_type}}</div>
@endforeach
</div>
</div>

</div>


<div class="fltr-group">
<div class="fltr-items-heading">
<div class="fltr-item-left">
<h6>Skills</h6>
</div>
<div class="fltr-item-right">
<a href="#">Clear</a>
</div>
</div>
<div class="ui fluid multiple search selection dropdown skills-search">
<input name="tags" type="hidden" value="">
<i class="dropdown icon"></i>
<input class="search" autocomplete="off" tabindex="0"><span class="sizer" style=""></span><div class="default text">Skills</div>
<div class="menu transition hidden" tabindex="-1">
<div class="item selected" data-value="angular">Angular</div>
<div class="item" data-value="css">CSS</div>
<div class="item" data-value="design">Graphic Design</div>
<div class="item" data-value="ember">Ember</div>
<div class="item" data-value="html">HTML</div>
<div class="item" data-value="ia">Information Architecture</div>
<div class="item" data-value="javascript">Javascript</div>
<div class="item" data-value="mech">Mechanical Engineering</div>
<div class="item" data-value="meteor">Meteor</div>
<div class="item" data-value="node">NodeJS</div>
<div class="item" data-value="plumbing">Plumbing</div>
<div class="item" data-value="python">Python</div>
<div class="item" data-value="rails">Rails</div>
<div class="item" data-value="react">React</div>
<div class="item" data-value="repair">Kitchen Repair</div>
<div class="item" data-value="ruby">Ruby</div>
<div class="item" data-value="ui">UI Design</div>
<div class="item" data-value="ux">User Experience</div>
</div>
</div>
</div>

<div class="filter-button">
<button class="flr-btn">Search Now</button>
</div>
</div>
</div>



<div class="col-lg-8 col-md-7 mainpage">

<div class="main-tabs">
<div class="res-tabs">
<div class="mtab-left">
<ul class="browsr-project">
<li>
<span class="nav-link">Search Results</span>
</li>
</ul>
</div>
<div class="mtab-right">
<ul>
<li class="bp-block">
<div class="ui selection dropdown skills-search sort-dropdown">
<input name="gender" type="hidden" value="default">
<i class="dropdown icon d-icon"></i>
<div class="text">Sort By</div>
<div class="menu">
<div class="item" data-value="0">All</div>
<div class="item" data-value="1">Top</div>
<div class="item" data-value="2">Newest</div>
<div class="item" data-value="3">Ranking</div>
</div>
</div>
</li>
</ul>
</div>
</div>


<div class="prjoects-content">
<div class="row">
@foreach($seeker as $seekers)
<div class="lg-item5 col-lg-6 col-xs-6 grid-group-item5">
<div class="job-item mt-30">
<div class="job-top-dt1 text-center">
<div class="job-center-dt">
<img src="/images/{{$seekers->user->user_image}} " alt="">
<div class="job-urs-dts">
<a href="#"><h4>{{$seekers->first_name}}  {{$seekers->last_name}}</h4></a>
<span>{{$seekers->tagline}}</span>
<div class="avialable">Available {{$seekers->availability}}</div>
</div>
</div>
<div class="job-price hire-price">$50/hr</div>
</div>
<div class="rating-location">


<div class="left-location">
<div class="text-left">
<div class="rtitle"></div>
<span><i class="fas fa-map-marker-alt"></i> {{$seekers->location}}</span>
</div>
</div>
</div>
<div class="job-buttons">
<ul class="link-btn">
<li><a href="/seekerProfile/{{$seekers->id}}" class="link-j1" title="View Profile">View Profile</a></li>
<li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
<li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
</ul>
</div>
</div>
</div>



@endforeach
<div class="col-12">
<div class="main-p-pagination">
<nav aria-label="Page navigation example">
<ul class="pagination">
<li class="page-item">
<a class="page-link" href="#" aria-label="Previous">
PREV
</a>
</li>
<li class="page-item"><a class="page-link active" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">...</a></li>
<li class="page-item"><a class="page-link" href="#">24</a></li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
NEXT
</a>
</li>
</ul>
</nav>
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