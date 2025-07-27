<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $table = 'presence';
    protected $primaryKey = 'PresenceId';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'SessionId',
        'StudentId',
        'IsInCorrectLocation',
        'IsCorrectFace',
        'IsVerified',
    ];
}