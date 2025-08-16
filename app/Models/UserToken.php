<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class UserToken extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    // atribut yang dapat diisi
    protected $fillable = [
        'user_id',
        'token',
        'type',
        'is_user',
    ];

    // atribut yang disembunyikan
    protected $hidden = [
        'token',
    ];

    // relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
