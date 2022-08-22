<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keunggulan extends Model
{
    protected $table = 'koperasidev.content_keunggulan';
    protected $primaryKey = 'id'; // or null
    protected $guarded = [];
}
