@extends('layouts.default')
@section('content')

@if (!auth()->user()->company)
<h1>create company profile first</h1>
<a href="/companies/create">click here</a>
@else
<div class="title-bar">
<div class="container">
<div class="row">
<div class="col-lg-12">
<ol class="title-bar-text">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Post a Project</li>
</ol>
</div>
</div>
</div>
</div>

<!-- <form method="POST" action="/projects">
                @csrf
                
                <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" name="job_name" class="form-control" id="formGroupExampleInput" placeholder="Post Title">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Description</label>
                    <input type="text" name="job_description" class="form-control" id="formGroupExampleInput2" placeholder="Post Description">
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
                </form> -->

<main class="browse-section">
<div class="container">
<div class="row">
<div class="col-md-12">

@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<form method="POST" action="/projects">
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
<div class="main-heading bids_heading">
<h2>Post a Project</h2>
<div class="line-shape1">
<img src="{{asset('images/line.svg')}}" alt="">
</div>
</div>

<div class="post501">
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<label class="label15">Project Name*</label>
<input name="job_name" type="text" class="job-input" placeholder="Project Name Here">
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label class="label15">Project Description*</label>
<div class="description_dtu">
<div class="description_actions">
<a href="#"><i class="fas fa-bold"></i></a>
<a href="#"><i class="fas fa-italic"></i></a>
<a href="#"><i class="fas fa-list-ul"></i></a>
<a href="#"><i class="fas fa-list-ol"></i></a>
</div>
<textarea name="job_description" class="textarea70" placeholder="Type description"></textarea>
</div>
</div>
</div>


<div class="form-group col-lg-12">
      <label for="inputState">Project Category*</label>
      <select id="inputState" class="form-control"  name="job_type_id">
        <option selected>Choose...</option>
        @foreach ($type as $t)
<option  class="item" value="{{$t->id}}">{{$t->job_type}}</option>
@endforeach
      </select>
    </div>


<!-- <div class="col-lg-12">
<div class="form-group">
<label class="label15">Skills*</label>
<div class="ui fluid multiple search selection dropdown skills-search">
<input name="tags" type="hidden" value="">
<i class="dropdown icon"></i>
<input class="search" autocomplete="off" tabindex="0"><span class="sizer" style=""></span><div class="default text">Skills</div>
<div class="menu transition hidden" tabindex="-1" style="display:none;">
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
</div> -->
<!--<div class="col-lg-12">
<div class="form-group">
<label class="label15">Upload Files*</label>
<div class="image-upload-wrap1">
<input class="file-upload-input1" id="file2" type="file" onchange="readURL(this);" accept="image/*">
<div class="drag-text1">
Upload Files
</div>
</div>
<p class="upload_dt">Images, Pdf and MS Word Filess</p>
</div>
</div> -->
<div class="col-lg-12">
<button class="post_jp_btn" type="submit">Post a Project</button>
</div>
</div>

</div>
</form>
</div>








</div>
</div>
</main>
@endif

@stop