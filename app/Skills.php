<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $table = "skills";

    protected $fillable = [
        "skill_level",
        "skill_name"
    ];

    public $incrementing = false;

    public function user(){
        return $this->belongsToMany('App\User');
    }
}
