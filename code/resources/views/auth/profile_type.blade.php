@extends('layouts.default')
@section('content')
<main class="browse-section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="main-heading">
<!-- <h2>Sign Up</h2>
<div class="line-shape1">
<img src="images/line.svg" alt="">
</div> -->
</div>
<div class="choose_profile">
<h3>Choose Your Profile</h3>
<p>Which type of profile fits you best?</p>
</div>
<div class="plans150">
<div class="row justify-content-md-center">
<div class="col-lg-4 col-md-4">
<div class="plan_item">
<div class="plan_icon1">
<div class="cfp_icon">
<img src="images/cp_icon.svg" alt="">
</div>
</div>
<form method="POST" action="{{ route('register') }}">
 @csrf

 {{method_field('PATCH')}}
<h4>Freelancer</h4>
<div class="plan_price1">
<span>Start a Freelancer Profile</span>
</div>
<ul class="plan_dt1">
<li><p>01. Phasellus ac vulputate erat, sit amet tristique elit.</p></li>
<li><p>2. Ut sed ex nec tellus fermentum rhoncus et eget massa. Pellentesque sit amet felis nec nulla imperdiet varius.</p></li>
</ul>


<div class="plan_btn">
    <button name="user_type_id" value="2">Signup Freelancer Profile</button>
</div>

</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="plan_item">
<div class="plan_icon1">
<div class="cfp_icon">
<img src="images/fp_icon.svg" alt="">
</div>
</div>
<h4>Company</h4>
<div class="plan_price1">
<span>Start a Company Profile</span>
</div>
<ul class="plan_dt1">
<li><p>01. Phasellus ac vulputate erat, sit amet tristique elit.</p></li>
<li><p>2. Ut sed ex nec tellus fermentum rhoncus et eget massa. Pellentesque sit amet felis nec nulla imperdiet varius.</p></li>
</ul>
<div class="plan_btn">
<button name="user_type_id" value="1">Signup Company Profile</button>

</div>
</form>
</div>
</div>
</div>
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
