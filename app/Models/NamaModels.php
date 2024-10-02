<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaModels extends Model
{
    use HasFactory;
    protected $table = 'permintaan_obat';
    protected $fillable = ['nama', 'kelas', 'jurusan', 'nama_obat', 'jumlah'];
}
