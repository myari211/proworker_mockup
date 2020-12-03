<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\UserInformation;

class TestController extends Controller
{
    public function index($id){



        $summary_count = DB::table('user_summaries')->where('user_id', $id)->count();
        $summary = DB::table('user_summaries')->where('user_id', $id)->get();
        return view('testing.dashboard', compact('summary_count', 'summary'));
    }
}
