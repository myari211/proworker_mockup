<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index');

// talent
Route::get('/admin/login', 'Auth\AdminController@getLogin')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminController@postLogin');

Route::middleware('role:admin')->group(function() {
    Route::get('/admin/dashboard', 'Admin\AdminController@index')->name('admin.page');
    Route::get('/admin/job-roles', 'Admin\JobRoleController@index');
    Route::post('/admin/job-roles/category', 'Admin\JobRoleController@category');
    Route::post('/admin/job-roles/roles', 'Admin\JobRoleController@roles');
});

Route::middleware('role:talent')->group(function(){
    Route::get('/talent/dashboard', 'Talent\TalentController@index')->name('user.page');;
    Route::get('/talent/profile/{id}', 'Talent\TalentController@profile');
    Route::post('/talent/profile/personal_information/{id}', 'Talent\ProfileController@personal_information');
    Route::post('/talent/profile/summaries/{id}', 'Talent\ProfileController@user_summary');
    Route::get('/talent/profile/work/{id}', 'Talent\ProfileController@work');
    Route::post('/talent/profile/avatar/{id}', 'Talent\ProfileController@avatar');
});


Route::get('/tes/{id}', 'Talent\TalentController@tes');

//social Auth
Route::get('/auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\SocialiteController@handleProvideCallback');
