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
});

Route::middleware('role:talent')->group(function(){
    Route::get('/talent/dashboard', 'Talent\TalentController@index')->name('user.page');;
    Route::get('/talent/profile/{id}', 'Talent\TalentController@profile');
    Route::post('/talent/profile/personal_information/{id}', 'Talent\ProfileController@personal_information');
    Route::post('/talent/profile/summaries/{id}', 'Talent\ProfileController@user_summary');

});
