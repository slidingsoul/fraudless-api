<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';
    protected $primaryKey = 'EnrollmentId';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'StudentId',
        'ClassId',
    ];
}