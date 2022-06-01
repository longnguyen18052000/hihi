<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primarykey = 'user_id';
    protected $fillable = ['name', 'username', 'password', 'email', 'gender', 'phone', 'date_of_birth', 'address', 'city', 'district'];
}
