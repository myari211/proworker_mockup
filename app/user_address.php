<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_address extends Model
{
    protected $table = "user_address";

    protected $fillable = [
        "country",
        "province",
        "city",
        "street_address",
        "postal"
    ];

    public $incrementing = false;
}
