<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class additionalphoto extends Model
{
    protected $fillable = [
        'new_product_id',
        'photo',
    ];  


    /**
     * Get the user associated with the additionalphoto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function newproductt()
    {
        return $this->belongsTo(newproduct::class, 'new_product_id');
    }
}
