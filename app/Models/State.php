<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['name','initials','country_id'];

    public function cities()
    {
      return hasMany(City::class);
    }

}
