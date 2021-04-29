@extends('layouts.default')
@section('content')
<main class="browse-section">
<div class="container">
<div class="row justify-content-md-center">
<div class="col-md-6">
<div class="lg_form">
<div class="main-heading">
<h2>Sign Up to ProFlex</h2>
<div class="line-shape1">
<img src="images/line.svg" alt="">
</div>
</div>


<form method="POST" action="{{ route('register') }}">
 @csrf
<div class="form-group">
<label for="name" class="label15">{{ __('Name') }}</label>
<input  placeholder="Enter Your Name" id="name" type="text" class="job-input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>


<div class="form-group">
<label for="email"  class="label15">{{ __('E-Mail Address') }}</label>
<input id="email" type="email" class="job-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Enter Email Address">

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>



<div class="form-group">
<label for="password" class="label15">{{ __('Password') }}</label>
<input placeholder="Enter Password" id="password" type="password" class="job-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>


<div class="form-group">
<label for="password-confirm" class="label15">{{ __('Confirm Password') }}</label>
<input id="password-confirm" type="password" class="job-input form-control" name="password_confirmation" required autocomplete="new-password">

</div>






<div class="form-group">
<label for="choose_profile"  class="label15">{{ __('Choose Profile') }}</label>


</div>
<div class="plans150">
<div class="row justify-content-md-center">
<div class="col-lg-6 col-md-6">
<div class="plan_item">
<div class="plan_icon1">
<div class="cfp_icon">
<img src="images/cp_icon.svg" alt="">
</div>
</div>

<h4>Freelancer</h4>


<div class="plan_btn">
    <input type="radio" name="user_type_id" value="2" >Signup Freelancer Profile</input>
</div>

</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="plan_item">
<div class="plan_icon1">
<div class="cfp_icon">
<img src="images/fp_icon.svg" alt="">
</div>
</div>
<h4>Company</h4>


<div class="plan_btn">
<input type="radio" name="user_type_id" value="1">Signup Company Profile</input>

</div>

</div>
</div>
</div>
</div>
<div class="ui checkbox apply_check check_out checked">
<input type="checkbox" tabindex="0" class="hidden">
<label style="color:#242424 !important;">I accept the Terms of Services</label>
</div>
<input id="name"  class="form-control " name="type" style="display:none"  autocomplete="type" autofocus></input>
<button type="submit"  class="lr_btn">{{ __('Register') }}</button>
<div class="done140">
Already have an account?<a href="sign_in.html">Sign in Now<i class="fas fa-angle-double-right"></i></a>
</div>

</form>
</div>
</div>
</div>
</div>
</main>



            

<!--            
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="type"  required autocomplete="type" autofocus>

                               
                            </div>
                        </div> -->
                 
              
@endsection
