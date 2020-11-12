<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use App\Work_experience;
use App\Tes;
use App\UserSummary;



class WorkController extends Controller
{
    public function work($id, Request $request){
        $data = [];
        for($i = 0; $i < count($request->job_role); $i++){
            $data[] = array(
                "id" => Uuid::uuid4()->toString(),
                "user_id" => $id,
                "job_role_id" => $request->job_role[$i],
                "job_category_id" => $request->job_category[$i],
                "work_specialization" => $request->work_specializations[$i],
                "work_company_name" => $request->work_company_name[$i],
                "work_duration" => $request->work_duration[$i],
            );
        }

        $work = Work_experience::insert($data);
        if(!$work){
            alert()->danger('Failed', 'Failed To Sent');
        }
        else{
            alert()->success('Completed', 'Work Experiences Has Been Add');
        }

        return redirect('/talent/profile/work/'.$id);

        
    }  

    public function summaries($id, Request $request){
        $summaries = new UserSummary;

        $summaries->id = Uuid::uuid4()->toString();
        $summaries->summary_name = $request->summary_name;
        $summaries->summary_details = $request->summary_details;
        $summaries->user_id = $id;
        $summaries->save();

        alert()->success("Completed", "Job Summaries Was Added");
        return redirect('/talent/profile/work/'.$id);
    }
}
