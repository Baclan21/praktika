<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $table="basket_product";
    public function products(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
