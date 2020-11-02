<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

use App\RoleJob;
use App\JobCategory;

class JobRoleController extends Controller
{
    public function index(){

        $role = RoleJob::paginate(5);
        $category = JobCategory::paginate(5);

        return view('admin.job_role', compact('role', 'category'));
    }

    public function roles(Request $request){
        $role = new RoleJob;

        $role->id = Uuid::uuid4()->toString();
        $role->job_role_name = $request->job_role_name;
        $role->save();

        return redirect('/admin/job-roles');
    }

    public function category(Request $request){
        $category = new JobCategory;

        $category->id = Uuid::uuid4()->toString();
        $category->job_categories = $request->job_categories;
        $category->save();

        return redirect('/admin/job-roles');
    }
}
