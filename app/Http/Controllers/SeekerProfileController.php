<?php

namespace App\Http\Controllers;

use App\SeekerProfile;
use App\User;
use App\JobPostActivity;
use App\JobType;
use Illuminate\Http\Request;

class SeekerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except(['showall', 'showOne']);
    }

    public function showall()
    {
        $seeker = SeekerProfile::all();
        $type = JobType::all();
        return view('seekers.seeker_profiles', compact('seeker','type'));
    }


    public function showOne(SeekerProfile $seeker)
    {
        
        return view('seekers.single_seeker_profile', compact('seeker'));
    }


    public function index()
    {
        //
        // $this->authorize('create', SeekerProfile::class);
        $seeker = auth()->user()->seeker;
        // return view('includes.indexHeader', compact('seeker'));
        if ($seeker === null) {
            return redirect('/seekers/create');
        }else{
        return redirect('/seekers/'.$seeker->id);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', SeekerProfile::class);
        $seeker = SeekerProfile::all();
        return view('seekers.create_seeker_profile', compact('seeker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->authorize('create', SeekerProfile::class);



        
        $attributes = request()->validate([
            'about' => ['required'],
            'cv' => ['required'],
            'availability' => ['required'],
            'location' => ['required'],
            'tagline' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
        ]);

        SeekerProfile::create($attributes + ['user_id' => auth()->id()]);
        return redirect ('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SeekerProfile  $seekerProfile
     * @return \Illuminate\Http\Response
     */
    public function show(SeekerProfile $seeker)
    {
        //

        abort_if($seeker->user_id !== auth()->id(), 403);

        $seeker = SeekerProfile::where('user_id', '=', auth()->id())->first();

        if ($seeker === null) {
            return redirect('/seekers/create');
        }else{
        return view('seekers.my_seeker_profile', compact('seeker'));
        }
    }

    // public function showBids(SeekerProfile $seeker)
    // {
    //     //

    //     abort_if($seeker->user_id !== auth()->id(), 403);
    //     $user = JobPostActivity::where('user_id' , '=' , 1);
 
    //     return view('seekers.my_seeker_bids', compact('user'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SeekerProfile  $seekerProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(SeekerProfile $seekerProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SeekerProfile  $seekerProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeekerProfile $seekerProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SeekerProfile  $seekerProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeekerProfile $seekerProfile)
    {
        //
    }
    public function dashHead(SeekerProfile $seeker)
    {
        //

        abort_if($seeker->user_id !== auth()->id(), 403);
        return view('includes.dashhead_bid', compact('seeker'));
    }
    public function updateImage(User $user)
    {
        //
        $attributes = request()->validate([
            'user_image'=>['mimes:jpeg,jpg,bmp,png,gif,svg,pdf'],
        ]);

        User::where('id',$user->id)->update($attributes);

     
        return back();

    }
}
