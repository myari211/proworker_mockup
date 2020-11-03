<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserInformation;
use App\UserSummary;
use App\JobCategory;
use App\RoleJob;

class TalentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('talent.dashboard');
    }

    public function profile($id){

        $count_profile = DB::table('user_information')->where('user_id', $id)->count();
        $profile = DB::table('user_information')->where('user_id', $id)->get();

        $user = DB::table('users')->where('id', $id)->count();

        $count_summary = UserSummary::where('user_id', $id)->count();
        $summary = UserSummary::where('user_id', $id)->get();

        $role = RoleJob::get();

        $category = JobCategory::get();

        return view('talent.edit_profile', compact('user', 'profile', 'count_profile', 'count_summary', 'summary', 'role', 'category'));
    }

    public function tes($id){
        $count_profile = DB::table('user_information')->where('user_id', $id)->count();
        $profile = DB::table('user_information')->where('user_id', $id)->get();

        $count_summary = UserSummary::where('user_id', $id)->count();
        $summary = UserSummary::where('user_id', $id)->get();

        $role = RoleJob::get();

        $category = JobCategory::get();
        
        return view('tes.tes', compact('profile', 'count_profile', 'count_summary', 'summary', 'role', 'category'));
    }
}
