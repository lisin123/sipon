<?php

namespace App\Models;

use App\Models\Santri;
use App\Models\JenisAbsen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IjinKegiatan extends Model
{
    use HasFactory;

    // protected $primaryKey = 'nis';
    public $timestamps = false;

    public function santri(){
        return $this->belongsTo(Santri::class, 'nis');
    }

    public function kegiatan(){
        return $this->belongsTo(JenisAbsen::class, 'id_act');
    }
}
