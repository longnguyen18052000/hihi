<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    protected $table = 'icon';
    protected $primarykey = 'id';
    protected $fillable = ['name_icon', 'name_icon_product'];
}
