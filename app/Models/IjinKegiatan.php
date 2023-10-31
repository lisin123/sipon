<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IjinKegiatan extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'nis', 'id_act', 'reason', 'status'];
}
