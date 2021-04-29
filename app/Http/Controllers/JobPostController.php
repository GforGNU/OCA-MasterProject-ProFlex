<?php

namespace App\Http\Controllers;

use App\JobPost;
use App\JobType;
use App\Company;
use App\JobPostActivity;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['showall','showone']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    
    public function showall()
    {
        $post = JobPost::all();
        $type = JobType::all();
        
        return view('pages.allposts', compact('post','type'));
    }
    public function showCat()
    {
        $post = JobPost::all();
        $type = JobType::all();
        
        return view('pages.allposts', compact('post','type'));
    }




    public function showone(JobPost $project)
    {
        return view('pages.view_post', compact('project'));
    }
    
    public function index()
    {
        //
        $post = auth()->user()->posts;
        $count = JobPostActivity::all();
        
        return view('recruiter_dashboard.projects', compact('post', 'count'));
    }
   
    public function header()
    {
        //
        $jobPost = JobPost::all();
        return view('includes.indexHeader', compact('jobPost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', JobPost::class);
        $type = JobType::all();
        return view('pages.post_project', compact('type'));
        // return view('/pages.post_project');
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

        $company = auth()->user()->company->id;
        compact('company');
        
        $this->authorize('create', JobPost::class);

        $attributes = request()->validate([
            'job_name' => ['required'],
            'job_description' => ['required'],
            'job_type_id' => ['required'],
        ]);

        JobPost::create($attributes + ['posted_by_id' => auth()->id(), 'company_id'=> $company]);
        return redirect ('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function show(JobPost $jobPost)
    {
        //
        abort_if($jobPost->user_id !== auth()->id(), 403);
        return view('pages.show_post', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $jobPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPost $jobPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPost $jobPost)
    {
        //
    }
}
