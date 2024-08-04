<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  use HasFactory;

    public function signingsworkplease() {

        return $this->belongsToMany(Signing::class, table: 'artist_signing')->withPivot('artist_id');
    }
}
