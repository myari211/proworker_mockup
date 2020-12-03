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

// Route::get('/', 'Guest\DashboardController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index');

// // talent
// Route::get('/admin/login', 'Auth\AdminController@getLogin')->name('admin.login');
// Route::post('/admin/login', 'Auth\AdminController@postLogin');

// Route::middleware('role:admin')->group(function() {
//     Route::get('/admin/dashboard', 'Admin\AdminController@index')->name('admin.page');
    
//     //Job Roles
//     Route::post('/admin/job-roles/roles', 'Admin\JobRoleController@roles');
//     Route::post('/admin/job-roles/roles/edit/{id}', 'Admin\JobRoleController@roles_update');

//     //user-list
//     Route::get('/admin/user/list', 'Admin\UserController@index');
//     Route::get('/admin/user/{id}', 'Admin\UserController@details');

//     Route::get('/admin/job-roles', 'Admin\JobRoleController@index');
//     Route::post('/admin/job-roles/category', 'Admin\JobRoleController@category');
//     Route::get('/admin/level', 'Admin\LevelController@index');
//     Route::post('/admin/level/input', 'Admin\LevelController@input');
//     Route::get('/admin/skills', 'Admin\SkillsController@index');

//     Route::post('/admin/job-roles/specializations/edit/{id}', 'Admin\JobRoleController@specializations_update');
//     Route::post('/admin/specializations', 'Admin\JobRoleController@specializations');
// });

// Route::middleware('role:talent')->group(function(){
//     // Route::post('/talent/profile/{id}', 'Talent\ProfileController@profile');
//     Route::get('/talent/dashboard', 'Talent\TalentController@index')->name('user.page');
//     Route::get('/talent/profile/{id}', 'Talent\TalentController@profile');
//         //summary
//         Route::post('/talent/summary/{id}', 'Talent\UserSummaryController@post');
//         //education
//         Route::post('/talent/education/{id}', 'Talent\UserEducationController@post');
// });

// Route::get('/signup', function(){
//     return view('master.guest');
// });


// Route::get('/tes/{id}', 'Talent\TalentController@tes');

// //social Auth
// Route::get('/auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
// Route::get('/auth/{provider}/callback', 'Auth\SocialiteController@handleProvideCallback');


// Route::get('dependent-dropdown', 'Talent\TalentController@city_store')->name('city.store');


Route::get('/', function(){
    return view('/about/about');
});