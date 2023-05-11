<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaMatkul extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matkul';
    protected $fillable = [
        'mahasiswa_id',
        'matkul_id'
    ];

    public function mahasiswa(){
        return $this->belongsTo(MahasiswaModel::class);
    }
    
    public function matakuliah(){
        return $this->belongsTo(MataKuliahModel::class, 'matkul_id','id');
    }
}
