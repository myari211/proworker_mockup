<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

use App\RoleJob;
use App\JobCategory;
use App\Specialization;

class JobRoleController extends Controller
{
    public function index(){

        $role = RoleJob::paginate(5);
        $category = JobCategory::paginate(5);
        $category_all = JobCategory::get();
        $category_count = JobCategory::count();

        $special = DB::table('specializations')->join('categories', 'specializations.category_name', '=', 'categories.id')->paginate('5');
        $special_all = DB::table('specializations')->join('categories', 'specializations.category_name', '=', 'categories.id')->select('specializations.*','categories.*', 'specializations.id as primary')->get();

        return view('admin.job_role', compact('special_all', 'category_all', 'category_count', 'special', 'role', 'category'));
    }

    public function roles(Request $request){
        $role = new RoleJob;

        $role->id = Uuid::uuid4()->toString();
        $role->job_role_name = $request->job_role_name;
        $role->save();

        alert()->success('Complete', 'Job Role Has Been Recorded');
        return redirect('/admin/job-roles');
    }

    public function roles_update($id, Request $request){
        $role = RoleJob::find($id);

        $role->job_role_name = $request->job_role_name;
        $role->save();

        alert()->success('Complete', 'Job Role Has Been Updated');
        return redirect('/admin/job-roles');
    }

    public function category(Request $request){
        $category = new JobCategory;

        $category->id = Uuid::uuid4()->toString();
        $category->job_categories = $request->job_categories;
        $category->save();

        alert()->success('Complete', 'Job Category Has Been Recorded');
        return redirect('/admin/job-roles');
    }

    public function specializations(Request $request){
        $special = new Specialization;

        $special->id = Uuid::uuid4()->toString();
        $special->category_name = $request->category_name;
        $special->specialization_name = $request->specialization_name;

        $special->save();

        alert()->success('Complete', 'Job Specialization Has Been Recorded');
        return redirect()->to('/admin/job-roles');
    }

    public function specializations_update($id, Request $request){
        $file = $request->file('image-web');
        $file_name = $file->getClientOriginalName();
        $request->file('image-web')->move('img/image_web/', $file_name);
        
        
        
        $special = Specialization::find($id);

        $special->category_name = $request->category_name;
        $special->specialization_name = $request->specialization_name;
        $special->image = $file_name;

        $special->save();

        alert()->success('Complete', 'Job Specialization Has Been Updated');
        return redirect()->to('/admin/job-roles');
    }
}
