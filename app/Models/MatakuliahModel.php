<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahModel extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';

    public function mahasiswa_matkul(){
        return $this->hasMany(MahasiswaMatkul::class, 'matkul_id', 'id');
    }
}