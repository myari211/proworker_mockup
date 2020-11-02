<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSummary extends Model
{
    protected $table = "user_summaries";
    protected $fillable = [
        "summary_name",
        "summary_details",
    ];

    public $incrementing = false;
}
