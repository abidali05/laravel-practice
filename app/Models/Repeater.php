<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repeater extends Model
{
    use HasFactory;
    protected $table = 'childinfos';
    protected $fillable = [

        'army_no',
        'child_name',
        'child_dob',
        'child_age',
        'child_blood',
    ];
}
