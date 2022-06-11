<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table = 'shoppingcart';
    protected $primarykey = 'shoppingcart_id';
    protected $fillable = ['image_product', 'name_product', 'price_product', 'username', 'phone', 'email', 'city', 'district', 'address', 'note'];
}
