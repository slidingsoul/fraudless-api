<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'ClassId';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'LecturerId',
        'CourseId',
        'ClassCode',
        'LecturerRoleId',
        'ClassYear',
        'Semester',
        'NumberOfSession',
        'CourseCategory',
    ];
}