<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newproduct extends Model
{
    protected $fillable = [
        'title',
        'description',  
        'color_id',
        'price', 
        'discount',
        'symbole',
        'status'
    ];

    public function photo()
    {
        return $this->hasMany(photo::class ,'newproduct_id');
    }

    public function color()
    {
        return $this->hasMany(color::class);
    }
}
