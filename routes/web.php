<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/jobs', function () {
    return view('pages.jobs');
});
Route::get('/companies', function () {
    return view('pages.companies');
});
Route::get('/freelancers', function () {
    return view('pages.freelancers');
});
Route::get('/other_freelancer_profile', function () {
    return view('pages.other_freelancer_profile');
});
Route::get('/post_project', function () {
    return view('pages.post_project');
});
Auth::routes();
// Route::patch('/profile_type/{user}', 'Auth\RegisterController@register');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/profile_type', 'UserTypeController@index');
// Route::post('/profile_type/User', 'UserTypeController@update');


Route::resource('projects', 'JobPostController');
Route::get('allposts', 'JobPostController@showall');
Route::get('jobpost/{project}', 'JobPostController@showone');
// Route::get('jobpost/{project}', 'JobPostActivityController@show');
// Route::get('/', 'JobPostController@header');
// Route::get('projects/create', 'JobTypeController@type');



//company profile
Route::resource('companies', 'CompanyController');
Route::get('allcompanies', 'CompanyController@showall');
Route::get('companyProfile/{company}', 'CompanyController@showOne');

//seeker profile
Route::resource('seekers', 'SeekerProfileController');
Route::get('allseekers', 'SeekerProfileController@showall');
Route::get('seekerProfile/{seeker}', 'SeekerProfileController@showOne');
// Route::get('seekerBids/{seeker}', 'SeekerProfileController@showBids');

//job post activity 
Route::resource('activities', 'JobPostActivityController');
// Route::get('activities/{project}', 'JobPostActivityController@store');
Route::get('seekerBids', 'JobPostActivityController@showBids');
// Route::get('bids/{user}', 'JobPostActivityController@manageBids');
 Route::get('bids', 'JobPostActivityController@manageBids');


//dash routing
// Route::get('seekerBids/{seeker}', 'SeekerProfileController@dashHead');
Route::patch('/seekers', 'UserController@update');
// Route::resource('users', 'UserController');
// Route::resource('users', 'UserController');

Route::patch('decline/{id}', 'JobPostActivityController@decline');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');