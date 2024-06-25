<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    protected $fillable = [
        'user_session',
        'newproduct_id',
        'name',
        'lastname',
        'company',
        'city',
        'phonenumber',
        'email',
        'additionalinformation',
        'quantity',
        'price',
        'fee',
        'coupon_rate',
        'coupon_number',  
        'pay_type',
        'status',
        'symbole'
    ];
  


    /**
     * Get the user that owns the checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function newproduct()
    {
        return $this->belongsTo(newproduct::class, 'newproduct_id');
    }
}
