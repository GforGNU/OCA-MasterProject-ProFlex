@extends('layouts.dashboard')

@section('content')

<a href="#" class="edit_link_profile"><i class="far fa-edit"></i>Edit Profile</a>
<div class="view_chart">
<div class="view_chart_header">
<h4>About</h4>
</div>
<div class="view_chart_body">
<p class="user_about_des">{{$seeker->about}}</p>
</div>
</div>
<div class="view_chart">
<div class="view_chart_header">
<h4>Skills</h4>
</div>
<div class="view_chart_body">
<div class="job-skills">
<a href="#">HTML</a>
<a href="#">CSS</a>
<a href="#">Wordpress</a>
<a href="#">Javascript</a>
<a href="#">Jquery</a>
<a href="#">Plugins</a>
</div>
</div>
</div>
<div class="view_chart">
<div class="view_chart_header">
<h4>Language</h4>
</div>
<div class="view_chart_body">
<div class="job-skills">
<a href="#" class="more-skills">English</a>
<a href="#" class="more-skills">Punjabi</a>
<a href="#" class="more-skills">Hindi</a>
</div>
</div>
</div>



@endsection