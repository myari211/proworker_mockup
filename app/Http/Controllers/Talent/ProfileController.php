<?php

namespace App\Http\Controllers\Talent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Ramsey\Uuid\Uuid;

use App\UserInformation;
use App\UserSummary;


class ProfileController extends Controller
{
    public function personal_information($id, Request $request) {
        $personal = new UserInformation;
        $personal->id = Uuid::uuid4()->getHex();
        $personal->user_id = $id;
        $personal->user_first_name = $request->user_first_name;
        $personal->user_last_name = $request->user_last_name;
        $personal->user_address = $request->user_address;
        $personal->user_telephone = $request->user_telephone;
        $personal->user_birth_date = $request->user_birth_date;
        $personal->user_gender = $request->user_gender;
        $personal->user_nationality = $request->user_nationality;

        $personal->save();

        alert()->success('Your Data Has Been Record', 'Complete');
        return redirect('/talent/dashboard');
    }

    public function user_summary($id, Request $request){
        $summary = new UserSummary;

        $summary->id = Uuid::uuid4()->getHex();
        $summary->user_id = $id;
        $summary->summary_name = $request->summary_name;
        $summary->summary_details = $request->summary_details;
        $summary->save();

        return redirect('/talent/dashboard');
    }

    public function work($id){
        return view('talent.edit_work');
    }

    public function avatar($id, Request $request){
        $file = $request->file('user_avatar');
        $fileName = $file->getClientOriginalName();
        $request->file('user_avatar')->move('avatar/', $fileName);

        $profile = DB::table('user_information')->where('user_id', $id)->update([
            'user_avatar'=> $fileName,
        ]);

        return redirect('/talent/dashboard');
    }
    
}
