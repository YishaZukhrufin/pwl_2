<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jk',
        'tempat_lahir' ,
        'tanggal_lahir', 
        'alamat',
        'hp'
    ];

    public function Kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function mahasiswa_matkul(){
        return $this->hasMany(MahasiswaMatkul::class);
    }
}
