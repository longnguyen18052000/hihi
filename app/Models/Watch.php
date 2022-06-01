<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    use HasFactory;

    protected $table = 'watch';
    protected $primarykey = 'id';
    protected $fillable = ['watch_images', 'name_watch', 'watch_price', 'watch_sale', 'discount'];
}
