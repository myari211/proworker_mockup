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

Route::get('/', 'Guest\DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

// talent
Route::get('/admin/login', 'Auth\AdminController@getLogin')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminController@postLogin');

Route::middleware('role:admin')->group(function() {
    Route::get('/admin/dashboard', 'Admin\AdminController@index')->name('admin.page');
    
    //Job Roles
    Route::post('/admin/job-roles/roles', 'Admin\JobRoleController@roles');
    Route::post('/admin/job-roles/roles/edit/{id}', 'Admin\JobRoleController@roles_update');

    //user-list
    Route::get('/admin/user/list', 'Admin\UserController@index');
    Route::get('/admin/user/{id}', 'Admin\UserController@details');

    Route::get('/admin/job-roles', 'Admin\JobRoleController@index');
    Route::post('/admin/job-roles/category', 'Admin\JobRoleController@category');
    Route::get('/admin/level', 'Admin\LevelController@index');
    Route::post('/admin/level/input', 'Admin\LevelController@input');
    Route::get('/admin/skills', 'Admin\SkillsController@index');

    Route::post('/admin/job-roles/specializations/edit/{id}', 'Admin\JobRoleController@specializations_update');
    Route::post('/admin/specializations', 'Admin\JobRoleController@specializations');
});

Route::middleware('role:talent')->group(function(){
    Route::get('/talent/dashboard', 'Talent\TalentController@index')->name('user.page');;
    Route::get('/talent/profile/{id}', 'Talent\TalentController@profile');

    Route::post('/talent/profile/address/{id}', 'Talent\ProfileController@address');

    Route::get('/talent/update_profile/{id}', 'Talent\TalentController@update_profile');
    Route::post('/talent/update_profile/update/{id}', 'Talent\TalentController@profile_proccess');

    Route::post('/talent/education/{id}', 'Talent\ProfileController@education');
    Route::get('/talent/update_education/{id}', 'Talent\ProfileController@update_education');

    Route::post('/talent/profile/personal_information/{id}', 'Talent\ProfileController@personal_information');
    Route::post('/talent/profile/summaries/{id}', 'Talent\ProfileController@user_summary');

    Route::get('/talent/profile/work/{id}', 'Talent\WorkController@index');
    Route::post('/talent/profile/work/input/{id}', 'Talent\WorkController@work');
    Route::get('/talent/profile/edit_work/{id}', 'Talent\WorkController@edit_work');
    Route::post('/talent/profile/update_work/{id}', 'Talent\WorkController@update_work');
    Route::post('/talent/profile/delete_work/{id}', 'Talent\WorkController@delete_work');

    Route::post('/talent/profile/work/summary/{id}', 'Talent\WorkController@user_summary');
    Route::get('/talent/profile/edit_summary/{id}', 'Talent\WorkController@edit_summary');
    Route::post('/talent/profile/update_summary/{id}', 'Talent\WorkController@update_summary');

    Route::post('/talent/profile/avatar/{id}', 'Talent\ProfileController@avatar');

    Route::post('/talent/skills/{id}', 'Talent\ProfileController@skills');
    Route::post('/talent/skills_more/{id}', 'Talent\ProfileController@skill_more');
    Route::post('/talent/skills_delete/{id}', 'Talent\ProfileController@skill_delete');


});

Route::get('/signup', function(){
    return view('master.guest');
});


Route::get('/tes/{id}', 'Talent\TalentController@tes');

//social Auth
Route::get('/auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\SocialiteController@handleProvideCallback');


Route::get('dependent-dropdown', 'Talent\TalentController@city_store')->name('city.store');





