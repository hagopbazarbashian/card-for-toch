<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shopcard extends Model
{
    protected $fillable = [
        'user_session',
        'title',
        'photo',
        'price',
        'fix_price',
        'many',
        'status'
    ];
}
