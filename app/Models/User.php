<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function positions()
    {
        return $this->belongsTo(Position::class);
    }

    public function roles()
    {
        return $this->belongsTo(Role::class);
    }
}
