<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;

use App\UserInformation;
use App\UserSummary;
use App\JobCategory;
use App\RoleJob;
use App\Avatar;
use App\Education;
use App\Level;
use App\Skills;
use App\user_address;
use App\Specialization;

class TalentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('talent.dashboard');
    }

    public function profile($id){
        $summary_count = UserSummary::where('user_id', $id)->count();
        $summary = UserSummary::where('user_id', $id)->get();
        $education_count = Education::where('user_id', $id)->count();
        $education = Education::where('user_id', $id)->get();
        $job_role = RoleJob::get();
        $category = JobCategory::get();
        return view('talent.profile', compact('summary_count', 'summary', 'education_count', 'education', 'job_role', 'category'));
    }






















    // public function profile($id, Request $request){

    //     $address_count = DB::table('user_address')->where('user_id', $id)->count();
    //     $address = DB::table('user_address')->where('user_id', $id)
    //                     ->join('provinces', 'user_address.province', '=', 'provinces.id')
    //                     ->join('cities', 'user_address.city', '=', 'cities.id')
    //                     ->select('*', 'user_address.id as address_id', 'provinces.name as province', 'cities.name as city')
    //                     ->get();

    //     $city = City::pluck('name', 'id');
    //     $provinces = Province::pluck('name', 'id');

    //     $count_profile = DB::table('user_information')->where('user_id', $id)->count();
    //     $profile = DB::table('user_information')->where('user_id', $id)->get();

    //     $user = DB::table('users')->where('id', $id)->count();

    //     $count_summary = UserSummary::where('user_id', $id)->count();
    //     $summary = UserSummary::where('user_id', $id)->get();

    //     $level = Level::get();

    //     $skill_count = Skills::where('user_id', $id)->count();
    //     $skill = DB::table('skills')->where('user_id', $id)->select('*', 'skills.id as primary')->join('levels', 'skills.level_id', '=', 'levels.id')->get();

    //     $education_count = Education::where('user_id', $id)->count();
    //     $education = Education::where('user_id', $id)->get();

    //     $role = RoleJob::get();

    //     $category = JobCategory::get();

    //     $avatar = DB::table('avatar')->join('users', 'users.id', '=', 'avatar.user_id')->count();
    //     $image = DB::table('avatar')->where('user_id', $id)->get();

        

    //     return view('talent.edit_profile', compact('city', 'address', 'address_count', 'provinces', 'skill', 'skill_count', 'education', 'education_count', 'level', 'image', 'avatar', 'user', 'profile', 'count_profile', 'count_summary', 'summary', 'role', 'category'));
    // }

    public function city_store(Request $request){
        $cities = City::where('province_id', $request->input('id'))
        ->pluck('name');
        
        return response()->json($cities);
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
