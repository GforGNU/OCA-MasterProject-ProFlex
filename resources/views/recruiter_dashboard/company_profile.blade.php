@extends('layouts.dashboard')

@section('content')




<a href="/companies/{{$company->id}}/edit" class="edit_link_profile"><i class="far fa-edit"></i>Edit Profile</a>
<div class="view_chart">
<div class="view_chart_header">
<h4>About</h4>
</div>

<div class="view_chart_body">

<p class="user_about_des">{{$company->profile_description}}</p>

</div>
</div>


@endsection