<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'homeproduct';
    protected $primarykey = 'home_product_id';
    protected $fillable = ['image_product', 'image_sale', 'price', 'sale', 'image_sale_price', 'name_product', 'discount', 'other'];
}
