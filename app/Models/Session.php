<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'class_sessions';
    protected $primaryKey = 'SessionId';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'ClassId',
        'SessionDate',
        'RoomId',
        'SessionNumber',
        'Shift',
    ];
}