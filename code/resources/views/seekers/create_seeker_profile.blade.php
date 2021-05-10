@extends('layouts.default')
@section('content')



<div class="title-bar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<ol class="title-bar-text">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Create Freelance Profile</li>
</ol>
</div>
</div>
</div>
</div>


<main class="browse-section">
<div class="container">
<div class="row">
<div class="col-md-8">

@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<div class="main-heading bids_heading">
<h2>Create Freelancer Profile</h2>
<div class="line-shape1">

<img src="{{asset('images/line.svg')}}" alt="">
</div>
</div>
<div class="post501">


<form method="POST" action='/seekers' enctype="multipart/form-data">
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@csrf
{{method_field('POST')}}


<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label class="label15">Profile Avtar*</label>
<div class="avtar_dp">
@if(is_null(Auth::user()->user_image)) 
<img src="/images/default.png"> 
@else 
<img src='{{url("images/".Auth::user()->user_image)}}' alt="">
@endif
</div>
<div class="image-upload-wrap1 ml5">
<input class="file-upload-input1" id="file3" type="file" onchange="readURL(this);" accept="image/*">
<div class="drag-text1">
Upload Files
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="label15">First Name*</label>
<input type="text" name="first_name" class="job-input" placeholder="Your First Name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="label15">Last Name*</label>
<input type="text" name="last_name" class="job-input" placeholder="Your Last Name">
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label class="label15">Description*</label>
<div class="description_dtu">
<div class="description_actions">
<a href="#"><i class="fas fa-bold"></i></a>
<a href="#"><i class="fas fa-italic"></i></a>
<a href="#"><i class="fas fa-list-ul"></i></a>
 <a href="#"><i class="fas fa-list-ol"></i></a>
</div>
<textarea class="textarea70" name="about" placeholder="Describe your experience, skills, etc. In complete details. This is your chance to show off."></textarea>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label class="label15">Tagline*</label>
<input type="text" name="tagline" class="job-input" placeholder="Wordpress Developer">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label class="label15">Skills*</label>
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
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="label15">Availability*</label>
<div class="ui fluid search selection dropdown skills-search">
<input name="availability" type="hidden" value="">
<i class="dropdown icon"></i>
<input class="search" autocomplete="off" tabindex="0">
<span class="sizer" style=""></span>
<div class="default text">I’m not sure</div>
<div class="menu transition hidden" tabindex="-1">
<div class="item selected" data-value="Full Time">Full Time</div>
<div class="item selected" data-value="Part Time">Part Time</div>
<div class="item selected" data-value="Not Available">Not Available</div>
</div>
</div>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label class="label15">Location*</label>
<div class="smm_input">
<input type="text" name="location" class="job-input" placeholder="Type Address">
<div class="loc_icon"><i class="fas fa-crosshairs"></i></div>
</div>
</div>
</div>


<div class="col-lg-12">
<div class="form-group">
<label class="label15">CV*</label>
<div class="smm_input">
<input type="file" name="cv" class="form-control-file" >
<div class="loc_icon"><i class="fas fa-crosshairs"></i></div>
</div>
</div>
</div>



<div class="col-lg-12">
<button class="post_jp_btn" type="submit">Finish Freelancer Profile</button>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-4">
<div class="main-heading bids_heading pjfaq80">
<h2>FAQ</h2>
</div>
<div class="jp_faq">
<div class="jp_faq_item">
<h4>01. Complete your profile</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum mi at erat egestas, nec porta diam pharetra.</p>
</div>
<div class="jp_faq_item">
<h4>02. Upload a profile picture</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum mi at erat egestas, nec porta diam pharetra.</p>
</div>
<div class="jp_faq_item">
<h4>03. Be honest about availability</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum mi at erat egestas, nec porta diam pharetra.</p>
</div>
</div>
</div>
</div>
</div>
</main>



@endsection