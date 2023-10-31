<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IjinPulangCuti extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'nis', 'reason', 'start_date', 'finish_date', 'is_come', 'is_paid'];
}
