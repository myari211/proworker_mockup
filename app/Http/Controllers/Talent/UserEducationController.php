<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

use App\Education;

class UserEducationController extends Controller
{
    public function post($id, Request $request){
        $education = new Education;
        $education->id = Uuid::uuid4()->toString();
        $education->education_degree = $request->education_degree;
        $education->education_institute_name = $request->education_institute_name;
        $education->education_field_of_study = $request->education_field_of_study;
        $education->education_start_date = $request->education_start_date;
        $education->education_end_date = $request->education_end_date;
        $education->education_description = $request->education_description;
        $education->user_id = $id;
        $education->save();
        alert()->success('Complete', 'Your education has been saved');
        return redirect('/talent/profile/'.$id);
    }
}
