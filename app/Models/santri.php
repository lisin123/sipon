<?php

namespace App\Models;

use App\Models\IjinKegiatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Santri extends Model
{
    use HasFactory;

    protected $primaryKey = 'nis';
    
    public function IjinKegiatan(){
        return $this->hasMany(IjinKegiatan::class, 'nis');
    }

    public function IjinPulangCuti(){
        return $this->hasMany(IjinPulangCuti::class, 'nis');
    }
}
