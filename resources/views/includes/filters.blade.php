<main class="browse-section">

<div class="container">
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="row">
<div class="col-lg-4 col-md-5">
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
<div class="default text">Select a job</div>
<div class="menu transition hidden" tabindex="-1">
<div class="item selected" data-value="Job1">Job 01</div>
<div class="item" data-value="Job2">Job 02</div>
<div class="item" data-value="Job3">Job 03</div>
<div class="item" data-value="Job4">Job 04</div>
<div class="item" data-value="Job5">Job 05</div>
<div class="item" data-value="Job6">Job 06</div>
<div class="item" data-value="Job7">Job 07</div>
<div class="item" data-value="Job8">Job 08</div>
<div class="item" data-value="Job9">Job 09</div>
<div class="item" data-value="Job10">Job 10</div>
<div class="item" data-value="Job11">Job 11</div>
<div class="item" data-value="Job12">Job 12</div>
<div class="item" data-value="Job13">Job 13</div>
<div class="item" data-value="Job14">Job 14</div>
<div class="item" data-value="Job15">Job 15</div>
</div>
</div>
</div>
<div class="fltr-group">
<div class="fltr-items-heading">


</div>

<div class="filter-button">
<button class="flr-btn">Search Now</button>
</div>
</div>
</div>
</div>