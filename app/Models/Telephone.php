<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    use HasFactory;

    protected $table = 'telephone';
    protected $primarykey = 'id';
    protected $fillable = ['image_telephone', 'name_telephone', 'price_telephone', 'sale_telephone', 'discount', 'other', 'hot_sale', 'price_only'];
}
