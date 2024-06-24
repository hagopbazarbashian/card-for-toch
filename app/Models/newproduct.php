<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newproduct extends Model
{
    protected $fillable = [
        'title',
        'description',  
        'price',
        'fee',
        'symbole',
        'photo',
        'status'
    ];

    /**
     * Get the user associated with the newproduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function checkout()
    {
        return $this->hasOne(checkout::class, 'newproduct_id');
    }

 
    
}
