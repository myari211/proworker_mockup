<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    protected $table = "user_information";
    protected $fillable = [
        "user_id",
        "user_first_name",
        "user_last_name",
        "user_address",
        "user_telephone",
        "user_birth_date",
        "user_gender",
        "user_nationality"
    ];

    public $incrementing = false;


    public function user(){
        return $this->belongsTo('App\User');
    }
}
