<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $table = "categories";

    protected $fillable = [
        "job_categories"
    ];

    public $incrementing = false;
}
