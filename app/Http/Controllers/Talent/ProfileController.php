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
use App\RoleJob;
use App\JobCategory;


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
        return redirect('/talent/profile/'.$id);
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

    public function avatar($id, Request $request){
        $file = $request->file('user_avatar');
        $fileName = $file->getClientOriginalName();
        $request->file('user_avatar')->move('avatar/', $fileName);

        $profile = DB::table('avatar')->updateOrInsert([
            'id' => Uuid::uuid4()->toString(),
            'user_id' => $id,
            'user_avatar'=> $fileName,
        ]);
        
        alert()->success('Complete', 'Your Avatar Has Been Changed');
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


        alert()->success('Complete', 'Your data has been recorded');
        return redirect('/talent/profile/'.$id);

    }

    public function update_education($id){

        return view('talent.update_education');
    }

    public function skill_more($id, Request $request){
        $skill = new Skills;
        $skill->id = Uuid::uuid4()->toString();
        $skill->skill_name = $request->skill;
        $skill->level_id = $request->level;
        $skill->user_id = $id;

        $skill->save();

        alert()->success('Complete', 'Your Skills Has Been Added');
        return redirect()->to('/talent/profile/'.$id);
    }

    public function skill_delete(Request $request, $id){
        $skill = Skills::find($id);
        $skill->delete();


        if(!$skill){
            alert()->danger('Failed', 'Sorry, the proccess uncompleted');
        }
        else
        {
            alert()->success('Complete', 'Your Skill has been deleted');
        }

        return redirect()->to('/talent/profile/'.$request->primary);
    }


    public function skills($id, Request $request){
        $data = [];

        for($i = 0; $i < count($request->skill); $i++){
            $data[] = array(
                "id" => Uuid::uuid4()->toString(),
                "skill_name" => $request->skill[$i],
                "level_id" => $request->level,
                "user_id" => $id,
            );
        }

        

        $skill = Skills::insert($data);

        if(!$skill){
            alert()->danger('Failed', 'Failed To Save Skills');
        }
        else{
            alert()->success('Complete', 'Your Skills Has Been Added');
        }

        return redirect('/talent/profile/'.$id);
    }


}