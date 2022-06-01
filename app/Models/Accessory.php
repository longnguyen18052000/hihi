<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;

    protected $table = 'accessory';
    protected $primarykey = 'id';
    protected $fillable = ['name_accessory', 'name_accessory_product'];
}
