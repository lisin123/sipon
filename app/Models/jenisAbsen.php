<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAbsen extends Model
{
    use HasFactory;

    protected $fillable = ['id_act', 'name_act', 'start_time', 'finish_time'];
}
