<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'like';
    protected $primarykey = 'id';
    protected $fillable = ['like_images', 'name_like', 'like_price', 'like_sale'];
}
