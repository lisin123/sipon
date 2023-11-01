<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IjinPulangCuti extends Model
{
    use HasFactory;

    public function santri(){
        return $this->belongsTo(Santri::class, 'nis');
    }
}
