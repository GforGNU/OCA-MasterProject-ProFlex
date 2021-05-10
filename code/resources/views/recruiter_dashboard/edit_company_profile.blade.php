@extends('layouts.default')
@section('content')



<div class="title-bar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<ol class="title-bar-text">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Create Company Profile</li>
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
<h2>Create Company Profile</h2>
<div class="line-shape1">
<img src="{{asset('images/line.svg')}}" alt="">
</div>
</div>
<div class="post501">


<form method="POST" action='/companies/{{$company->id}}'>
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
{{method_field('PATCH')}}



<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label class="label15">Profile Avtar*</label>
<div class="avtar_dp">
<img src="images/profile_dp.jpg" alt="">
</div>
<div class="image-upload-wrap1 ml5">
<input class="file-upload-input1" id="file3" type="file" onchange="readURL(this);" accept="image/*">
<div class="drag-text1">
Upload Files
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label class="label15">Company Name*</label>
<input value="{{ $company->company_name}}" name="company_name" type="text" class="job-input" placeholder="Your Company Name">
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label class="label15">Launch Date*</label>
<div class="smm_input">
<input value="{{ $company->establishment_date}}" name="establishment_date" type="text" class="job-input datepicker-here" data-date-format="yyyy-mm-dd" data-language="en" placeholder="Select Launch Date">
<div class="mix_max"><i class="fas fa-calendar-alt"></i></div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label class="label15">About Description*</label>
<div class="description_dtu">
<div class="description_actions">
<a href="#"><i class="fas fa-bold"></i></a>
<a href="#"><i class="fas fa-italic"></i></a>
<a href="#"><i class="fas fa-list-ul"></i></a>
<a href="#"><i class="fas fa-list-ol"></i></a>
</div>
<textarea  name="profile_description" class="textarea70" placeholder="Describe your experience, skills, etc. In complete details. This is your chance to show off.">{{ $company->profile_description}}</textarea>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label class="label15">Business Stream</label>
<input value="{{$company->business_stream}}" name="business_stream" type="text" class="job-input" placeholder="Wordpress Developer">
</div>
</div>





<div class="col-lg-12">
<div class="form-group">
<label class="label15">Website*</label>
<div class="smm_input5">
<input value="{{$company->company_website}}" name="company_website" type="text" class="website-input" placeholder="http://entercompanysite.com/">
<div class="loc_icon5"><i class="fas fa-globe"></i></div>
</div>
</div>
</div>

<div class="col-lg-12">
<button class="post_jp_btn" type="submit">Update Company Profile</button>
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