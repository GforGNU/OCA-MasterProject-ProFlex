<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['showall', 'showOne']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $company = Company::all();
        return view('pages.companies', compact('company'));
    }


    public function showOne(Company $company)
    {
        
        return view('pages.company_profile', compact('company'));
    }


    public function index()
    {
        //
        $company = auth()->user()->company;
        return view('recruiter_dashboard.company_profile', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Company::class);
        $company = Company::all();
        return view('recruiter_dashboard.create_company_profile', compact('company'));
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
        $this->authorize('create', Company::class);



        
        $attributes = request()->validate([
            'company_name' => ['required'],
            'profile_description' => ['required'],
            'establishment_date' => ['required'],
            'company_website' => ['required'],
            'business_stream' => [''],
        ]);

        Company::create($attributes + ['user_id' => auth()->id()]);
        return redirect ('/companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
        abort_if($company->user_id !== auth()->id(), 403);
        return view('recruiter_dashboard.company_profile', compact('company'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        // $profile = Company::find($id);
        return view('recruiter_dashboard.edit_company_profile', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Company $company)
    {
        //
      

        $this->authorize('create', Company::class);

        $attributes = request()->validate([
            'company_name' => ['required'],
            'profile_description' => ['required'],
            'establishment_date' => ['required'],
            'company_website' => ['required'],
            'business_stream' => [''],
        ]);

        Company::where('id',$company->id)->update($attributes);
        return redirect ('/companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
