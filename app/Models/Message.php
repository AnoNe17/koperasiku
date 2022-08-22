<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'koperasidev.content_message';
    protected $primaryKey = 'id'; // or null
    protected $guarded = [];
}
