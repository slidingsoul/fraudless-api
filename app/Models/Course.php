<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'CourseId';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'CourseId',
        'CourseName',
        'CourseCategory',
        'Credit',
    ];
}