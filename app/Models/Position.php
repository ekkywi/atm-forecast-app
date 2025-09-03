<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Position extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'position_code'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
