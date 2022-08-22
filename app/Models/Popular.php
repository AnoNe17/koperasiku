<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{
    protected $table = 'koperasidev.content_popular';
    protected $primaryKey = 'id'; // or null
    protected $guarded = [];
}
