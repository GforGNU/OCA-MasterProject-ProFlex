<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobPost;
use App\SeekerProfile;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = JobPost::all();
        $seekers = SeekerProfile::all();
        return view('pages.home', compact('posts', 'seekers'));
    }
}
