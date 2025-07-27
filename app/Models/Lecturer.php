<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $table = 'lecturers';
    protected $primaryKey = 'LecturerId';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'LecturerId',
        'LecturerFullName',
    ];
}