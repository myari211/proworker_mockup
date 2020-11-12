<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Userinformation;
use App\Avatar;
use App\UserInformation as Information;

class UserController extends Controller
{
    public function index(){

        $user = DB::table('users')
        ->select('*', 'users.id as primary')
        ->join('user_information', 'user_information.user_id', '=', 'users.id')
        ->join('work_experiences', 'work_experiences.user_id', '=', 'users.id')
        ->join('categories', 'categories.id' ,'=', 'work_experiences.job_category_id')
        ->join('role_jobs', 'role_jobs.id', '=', 'work_experiences.job_role_id')
        ->paginate(10);



        return view('admin.user_list', compact('user'));
    }

    public function details($id) {

        $avatar_count = DB::table('avatar')->where('user_id', $id)->count();
        
        $avatar = Avatar::where('user_id', $id)->get();

        $user = DB::table('users')
        ->where('users.id', $id)
        ->join('user_information', 'user_information.user_id', '=', 'users.id')
        ->get();

        $education = DB::table('users')
        ->where('users.id', $id)
        ->join('education', 'education.user_id', '=', 'users.id')
        ->get();




        return view('admin.details', compact('education', 'user', 'avatar_count', 'avatar'));
    }
}
