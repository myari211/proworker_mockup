<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $table = "specializations";

    protected $fillable = [
        "specializations_name",
        "category_name"
    ];

    public $incrementing = false;
}
