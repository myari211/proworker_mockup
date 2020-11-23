<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserInformation;
use App\UserSummary;
use App\JobCategory;
use App\RoleJob;
use App\Avatar;
use App\Education;
use App\Level;
use App\Skills;

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

        $level = Level::get();

        $skill_count = Skills::where('user_id', $id)->count();
        $skill = DB::table('skills')->where('user_id', $id)->select('*', 'skills.id as primary')->join('levels', 'skills.level_id', '=', 'levels.id')->get();

        $education_count = Education::where('user_id', $id)->count();
        $education = Education::where('user_id', $id)->get();

        $role = RoleJob::get();

        $category = JobCategory::get();

        $avatar = DB::table('avatar')->join('users', 'users.id', '=', 'avatar.user_id')->count();
        $image = DB::table('avatar')->where('user_id', $id)->get();

        return view('talent.edit_profile', compact('skill', 'skill_count', 'education', 'education_count', 'level', 'image', 'avatar', 'user', 'profile', 'count_profile', 'count_summary', 'summary', 'role', 'category'));
    }

    public function update_profile($id){
        $profile = DB::table('user_information')->where('user_id', $id)->get();

        return view('talent.update_profile', compact('profile'));
    }

    public function  profile_proccess(Request $request, $id){

        $profile = DB::table('user_information')->where('user_id', $id)->update([
            'user_first_name' => $request->user_first_name,
            'user_last_name' => $request->user_last_name,
            'user_telephone' => $request->user_telephone,
            'user_birth_date' => $request->user_birth_date,
            'user_gender' => $request->user_gender,
            'user_nationality' => $request->user_nationality,
        ]);

        if(!$profile){
            alert()->error('Your data is not Saved');
        }
        else
        {
            alert()->success('Complete', 'Your Profile Has Been changed');
        }
        
        
        return redirect()->to('/talent/profile/'.$id);
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
