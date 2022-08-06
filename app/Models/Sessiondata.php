<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessiondata extends Model
{
    use HasFactory;
    protected $table = 'sessions_tabele';
    protected $fillable = [
        'name',
        'email',
    ];
}
