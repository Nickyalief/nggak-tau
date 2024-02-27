<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthUser;

class User extends AuthUser
{
    use HasFactory;

    protected $table = 'users';
<<<<<<< HEAD
    protected $primaryKey = 'id';
=======
    protected $primaryKey = 'id_user';
>>>>>>> 42d1ab961bbf84431946d55c94aebf75c0402c2c

    protected $fillable = [
        'nama_user',
        'email',
        'password',
    ];
}
