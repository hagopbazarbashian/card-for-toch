<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class favorit extends Model
{
    protected $fillable = [
        'user_sessian',
        'product_id'
    ];

   

    /**
     * Get the user that owns the favorit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function newproduct()
    {
        return $this->belongsTo(newproduct::class, 'product_id');
    }
}
