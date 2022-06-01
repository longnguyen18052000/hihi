<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoppingphone extends Model
{
    use HasFactory;

    protected $table = 'shoppingphone';
    protected $primaryKey = 'id';
    protected $fillable = ['name_shopping_phone', 'image_shopping_phone', 'price_shopping_phone', 'sale_shopping_phone'];
}
