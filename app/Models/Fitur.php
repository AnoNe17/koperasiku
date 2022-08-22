<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    protected $table = 'koperasidev.content_fitur';
    protected $primaryKey = 'id'; // or null
    protected $guarded = [];
}
