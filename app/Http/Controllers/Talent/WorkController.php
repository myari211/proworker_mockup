<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use App\Work_experience;
use App\Tes;
use App\UserSummary;
use App\RoleJob;
use App\JobCategory;



class WorkController extends Controller
{
    
    public function index($id){
        $role = RoleJob::get();
        $category = JobCategory::get();

        $summaries_count = UserSummary::where('user_id', $id)->count();
        $summaries = UserSummary::where('user_id', $id)->get();

        $work = DB::table('work_experiences')->where('user_id', $id)
                        ->select('*', 'work_experiences.id as primary')
                        ->join('role_jobs', 'work_experiences.job_role_id', '=', 'role_jobs.id')
                        ->join('categories', 'work_experiences.job_category_id', '=', 'categories.id')
                        ->get();



        $work_count = Work_experience::where('user_id', $id)->count();

        return view('talent.edit_work', compact('work_count', 'work','role', 'category', 'summaries_count', 'summaries'));
    }

    public function user_summary($id, Request $request){
        $summaries = new UserSummary;
        $summaries->id = Uuid::uuid4()->toString();
        $summaries->summary_name = $request->summary_name;
        $summaries->summary_details = $request->summary_details;
        $summaries->user_id = $id;

        $summaries->save();

        alert()->success('Completed', 'Your Summary Has Been Added');
        return redirect()->to('/talent/profile/work/'.$id);
    
    }

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
                "work_description" => $request->work_description[$i],
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

    public function edit_work($id){
        $role = RoleJob::get();
        $category = JobCategory::get();

        $work = DB::table('work_experiences')->where('id', $id)->get();

        return view('talent.update_work', compact('role', 'category', 'work'));
    }

    public function update_work($id, Request $request){
        $work = Work_Experience::find($id);

        $work->job_role_id = $request->job_role;
        $work->job_category_id = $request->job_category;
        $work->work_specialization = $request->work_specializations;
        $work->work_company_name = $request->work_company_name;
        $work->work_duration = $request->work_duration;
        $work->work_description = $request->work_description;

        $work->save();

        alert()->success('Completed', 'Your Work Experiences has been changed');
        return redirect('/talent/profile/work/'.$request->primary);
    }

    public function delete_work($id, Request $request){
        $work = Work_experience::find($id);

        $work->delete();

        alert()->success('Completed', 'Your Work Experience Has Been Deleted');
        return redirect('/talent/profile/work/'.$request->primary);
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

    public function edit_summary($id){

        $summary = UserSummary::where('id', $id)->get();

        return view('talent.edit_summary', compact('summary'));
    }

    public function update_summary($id, Request $request){
        $summary = UserSummary::find($id);

        $summary->summary_name = $request->summary_name;
        $summary->summary_details = $request->summary_details;


        $summary->save();

        alert()->success('Completed', 'Your Summary Has Been Changed');
        return redirect()->to('/talent/profile/work/'.$request->primary );
    }
}
