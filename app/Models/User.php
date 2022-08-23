<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'koperasidev.users';
    protected $primaryKey = 'id'; // or null
    protected $guarded = [];
}
