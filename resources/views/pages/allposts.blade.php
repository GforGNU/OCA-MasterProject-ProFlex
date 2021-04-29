@extends('layouts.default')

@section('content')

<!-- @include('includes.filters') -->


<div class="title-bar">
<div class="container">
<div class="row">
<div class="col-lg-12 ">
<ol class="title-bar-text">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Browser Projects</li>
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



<!--main page -->
<div class="col-lg-8 col-md-7 mainpage">
<div class="main-tabs">
<div class="res-tabs">
<div class="mtab-left">
<ul class="browsr-project">
<li>
<span class="nav-link">Results 170</span>
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
<div class="item" data-value="0">Relevance</div>
<div class="item" data-value="1">New</div>
<div class="item" data-value="2">Old</div>
<div class="item" data-value="3">Last 15 Days</div>
</div>
</div>
</li>
<li class="grid-list">
<button class="gl-btn" id="grid"><i class="fas fa-th-large"></i></button>
<button class="gl-btn" id="list"><i class="fas fa-th-list"></i></button>
</li>
</ul>
</div>
</div>


<div class="prjoects-content">
<div class="row  view-group" id="products">
@foreach($post as $p)
<div class="lg-item col-lg-6 col-xs-6 grid-group-item1">
<div class="job-item mt-30">
<div class="job-top-dt">
<div class="job-left-dt">
    
<img src="/images/{{$p->user->user_image}}" alt="">
<div class="job-ut-dts">
<a href="#"><h4>{{$p->user->name}}</h4></a>

</div>
</div>
<div class="job-right-dt">
<div class="project-cost">$1k - $4.5k</div>
</div>
</div>
<div class="job-des-dt">
<h4>{{$p->job_name}}</h4>
<p>{{$p->job_description}}.</p>
<div class="job-skills">
<a href="#">UX</a>
<a href="#">UI</a>
<a href="#">Photoshop</a>
<a href="#" class="more-skills">+4</a>
</div>
</div>
<div class="job-buttons">
<ul class="link-btn">
<li><a href="#" class="link-j1" title="Apply Now">Bid Now</a></li>
<li><a href="jobpost/{{$p->id}}" class="link-j1" title="View Job">View Project</a></li>
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