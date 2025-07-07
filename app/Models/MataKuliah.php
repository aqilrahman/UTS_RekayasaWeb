<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'mata_kuliah';
    protected $fillable = [
        'nama',
        'kode',
        'sks',
        'kode_dosen'
    ];

    public function dosen(){
        return $this->belongsTo(Dosen::class, 'kode_dosen', 'id');
    }
}
