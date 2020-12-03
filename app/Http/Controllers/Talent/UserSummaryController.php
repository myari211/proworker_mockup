<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\UserSummary;
use Ramsey\Uuid\Uuid;


class UserSummaryController extends Controller
{
    public function post($id, Request $request){
        $summary = new UserSummary;
        $summary->id = Uuid::uuid4()->toString();
        $summary->user_id = $id;
        $summary->summary_name = $request->summary_name;
        $summary->summary_details = $request->summary_details;
        $summary->save();
        alert()->success('Complete', 'Your Summary Has Been Saved');
        return redirect('/talent/profile/'.$id);
    }
}
