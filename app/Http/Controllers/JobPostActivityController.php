<?php

namespace App\Http\Controllers;

use App\JobPostActivity;
use App\JobPost;
use App\User;
use App\Company;
use Illuminate\Http\Request;

class JobPostActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $post = JobPost::all();

        return view('pages.view_post', compact('post'));


    }


    public function show(JobPost $jobPost)
    {
        //

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        // $attributes = request()->validate([
        //     'apply_date' => [''],
        //     'is_confirmed' => [''],
        //     'file' => [''],
        // ]);


            $jobPost = request()->validate([
                'job_post_id' => [''],
            ]);
        // $jobPost =  JobPost::findOrFail($project)->first();
        // $jobPost = $project;
        // $jobPost = ($project->id);
        // var_dump($jobPost);
        // die;
        JobPostActivity::create($jobPost +  ['user_id' => auth()->id()]);
        return redirect ('/allposts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobPostActivity  $jobPostActivity
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobPostActivity  $jobPostActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPostActivity $activity)
    {
        //
        return view('recruiter_dashboard.manage_bidders', compact('activity'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobPostActivity  $jobPostActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPostActivity $activity)
    {
        //
        $this->authorize('create', Company::class);
        $confirm = request()->validate([
            'is_confirmed' => [''],
        ]);
        // JobPostActivity::update($confirm);
        JobPostActivity::where('id',$activity->id)->update(['is_confirmed' => 1]);
            // var_dump($activity->id);
            // die;
        return back();
    }

    public function decline(Request $request, JobPostActivity $id)
    {
        //
        $this->authorize('create', Company::class);
        $confirm = request()->validate([
            'is_confirmed' => [''],
        ]);
        // JobPostActivity::update($confirm);
        JobPostActivity::where('id',$id->id)->update(['is_confirmed' => 0]);
            // var_dump($activity->id);
            // die;
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobPostActivity  $jobPostActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPostActivity $jobPostActivity)
    {
        //
    }


    public function showBids(JobPostActivity $seeker)
    {
        //

        // abort_if($seeker->user_id !== auth()->id(), 403);
        // $userActivity = User::where('id' , '=' , auth()->id())->get()->first();

  
        $seeker = User::select("*")
                        ->where("id", "=", auth()->id())
                        ->first();



        $jobs = JobPost::all();

        // $jobs = JobPost::all();

        // $job = JobPost::all();
        // $act = User::with('jobPost.user.activity')->where('id', $seeker->user_id)->get();
        return view('seekers.my_seeker_bids', compact('seeker','jobs'));
    }



    public function manageBids(JobPostActivity $bids)
    {
        //
        $this->authorize('create', Company::class);
        // abort_if($user->id !== auth()->id(), 403);
        // $userActivity = User::where('id' , '=' , auth()->id())->get()->first();

  
        // $bids = JobPostActivity::select("*")
        // ->where("job_post_id", "=", $user->po)
        // ->first();

        $bids = JobPost::join('job_post_activities', 'job_posts.id', '=', 'job_post_activities.job_post_id')
        ->where('posted_by_id', '=' , auth()->id())
        ->get();
        // ->select('id')
        // ->get();
//         echo "<pre>";
//         var_dump($bids);
//         echo "</pre>";
// die;
        // $users = User::join('job_post_activities', 'users.id', '=', 'job_post_activities.user_id')
        // // ->where('posted_by_id', '=' , auth()->id())
        // ->get()->first();
$users = User::all();
$activity = jobPost::all()->first();

//                 echo "<pre>";
//               var_dump($users);
//         echo "</pre>";
// die;
        // $users = JobPostActivity::join('users', 'job_post_activities.user_id', '=', 'users.id')
        // ->where('posted_by_id', '=' , auth()->id())
        // ->get();

        return view('recruiter_dashboard.manage_bidders', compact('bids','users', 'activity'));
    }

    function showNote(JobPostActivity $post)
{
    $diff = $post->audits()->with('user')->get()->last();

    return view('includes.indexHeader')
        ->withPost($post)
        ->withDiff($diff);
}
}
