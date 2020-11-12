<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $table = "skills";

    protected $fillable = [
        "id",
        "level_id",
        "skill_name",
        "user_id"
    ];

    public $incrementing = false;
}
