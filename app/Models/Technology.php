<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $table = 'technology';
    protected $primarykey = 'id';
    protected $fillable = ['name_technology', 'name_technology_product'];
}
