<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    protected $fillable = [
        'code'
    ];

    public function product()
    {
        return $this->belongsTo(newproduct::class);
    }



}
