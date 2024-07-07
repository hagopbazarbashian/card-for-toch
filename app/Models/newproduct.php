<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newproduct extends Model
{
    protected $fillable = [
        'category_id',
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


    public function category(){

        return $this->belongsTo(category::class, 'category_id');
    }

    /**
     * Get the user that owns the newproduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function additionalphoto()
    {
        return $this->hasOne(additionalphoto::class, 'new_product_id');
    }
     

 
    
}
