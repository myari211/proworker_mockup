<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleJob extends Model
{
    protected $table = "role_jobs";

    protected $fillable = [
        "job_role_name",
    ];

    public $incrementing = false;
}
