<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Student extends Authenticatable implements JWTSubject
{
    protected $table = 'students';
    protected $primaryKey = 'StudentId';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'StudentId', 'StudentFullName', 'Email', 'StudentPassword'
    ];

    protected $hidden = [
        'StudentPassword',
    ];

    // JWT methods
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    // Override for password
    public function getAuthPassword()
    {
        return $this->StudentPassword;
    }
}
