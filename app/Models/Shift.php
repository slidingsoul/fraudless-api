<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $table = 'shifts';
    protected $primaryKey = 'Shift';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'Shift',
        'TimeStart',
        'TimeEnd',
    ];
}