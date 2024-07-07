<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [ 
        'name',
        'photo',
        'status'
    ]; 

    /**
     * Get the user associated with the category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function newproduct()
    {
        return $this->hasOne(newproduct::class, 'category_id');
    }
}
		