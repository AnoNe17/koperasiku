<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuntungan extends Model
{
    protected $table = 'koperasidev.content_keuntungan';
    protected $primaryKey = 'id'; // or null
    protected $guarded = [];
}
