<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

use App\Models\UserToken;

class User extends Authenticatable
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    // atribut yang dapat diisi
    protected $fillable = [
        'name',
        'username',
        'position',
        'password',
        'is_active'
    ];

    // atribut yang disembunyikan
    protected $hidden = [
        'password',
    ];

    // mutator untuk atribut password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    // relasi ke model UserToken
    public function tokens(): HasMany
    {
        return $this->hasMany(UserToken::class);
    }
}
