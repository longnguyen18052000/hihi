<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $table = 'phone';
    protected $primarykey = 'phone_id';
    protected $fillable = ['phone1', 'phone2', 'phone3', 'price', 'care', 'image'];
}
