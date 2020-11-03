<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $guarder = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
