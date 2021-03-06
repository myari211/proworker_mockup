<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $table = "avatar";

    protected $fillable = [
        "id",
        "user_id",
        "user_avatar"
    ];

    public $incrementing = false;
}
