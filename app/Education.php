<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = "education";

    protected $fillable = [
        "education_degree",
        "education_institute_name",
        "education_field_of_study",
        "education_start_date",
        "education_end_date",
        "education_description",
        "user_id",
    ];

    public $incrementing = false;
}
