<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserInformation;
use App\UserSummary;

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

        $count_summary = UserSummary::where('user_id', $id)->count();
        $summary = UserSummary::where('user_id', $id)->get();

        return view('talent.edit_profile', compact('profile', 'count_profile', 'count_summary', 'summary'));
    }
}
