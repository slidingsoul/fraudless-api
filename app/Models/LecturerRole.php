<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LecturerRole extends Model
{
    protected $table = 'lecturer_roles';
    protected $primaryKey = 'LecturerRoleId';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'LecturerRole',
    ];
}