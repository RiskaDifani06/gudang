<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_TambahBarang extends Model
{
    protected $guarded = ['id'];

    public function penilaian() {
        return $this->hasMany(M_Penilaian::class);
    }
}
