<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'RoomId';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'RoomId',
        'RoomCode',
    ];
}