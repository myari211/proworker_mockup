<?php

namespace App\Http\Controllers\Talent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Ramsey\Uuid\Uuid;

use App\UserInformation;
use App\UserSummary;
use App\Education;
use App\Skills;


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

        $profile = DB::table('avatar')->updateOrInsert([
            'id' => Uuid::uuid4()->toString(),
            'user_id' => $id,
            'user_avatar'=> $fileName,
        ]);

        return redirect('/talent/dashboard');
    }

    public function education($id, Request $request) {

        $education = new Education;
        $education->id = Uuid::uuid4()->toString();
        $education->user_id = $id;
        $education->education_degree = $request->education_degree;
        $education->education_institute_name = $request->education_institute_name;
        $education->education_field_of_study = $request->education_field_of_study;
        $education->education_start_date = $request->education_start_date;
        $education->education_end_date = $request->education_end_date;
        $education->education_description = $request->education_description;

        $education->save();

        return redirect('/talent/profile/'.$id);

    }

    public function skills($id, Request $request){

        return redirect('/talent/profile/'.$id);
    }
    
}
