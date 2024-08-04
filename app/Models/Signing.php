<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signing extends Model
{
    //


    public function signingworkplease() {
        //return $this->belongsToMany(Artist::class);
        return $this->belongsToMany(Artist::class);
    }
}
