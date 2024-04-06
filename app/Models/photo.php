<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $fillable = [
        'newproduct_id', 
        'photo'
    ];


    public function product()
    {
        return $this->belongsTo(newproduct::class, 'newproduct_id');
    }


    public function shopcard()
    {
        return $this->hasMany(shopcard::class, 'photo_id');
    }
}
