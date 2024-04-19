<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    protected $fillable = [
        'newproduct_id',
        'name',
        'lastname',
        'company',
        'city',
        'phonenumber',
        'email',
        'additionalinformation',
        'quantity',
        'fixprice',
        'price',
        'status',
        'symbole'
    ];
}
