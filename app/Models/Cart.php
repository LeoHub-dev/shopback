<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'status_id'
    ];

    public function products(){
    	return $this->belongsToMany(Product::class, 'cart_products')->withPivot('quantity');
    }

    public function status(){
    	return $this->belongsTo(Status::class);
    }
}
