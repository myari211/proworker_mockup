<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_experience extends Model
{
    protected $table = "work_experiences";

    protected $fillable = [
        "user_id",
        "job_role_id",
        "job_category_id",
        "work_specialization",
        "work_company_name",
        "work_start_date",
        "work_end_date",
        "work_description"
    ];

    protected $dates = [
        'work_start_date',
        'work_end_date'
    ];

}
