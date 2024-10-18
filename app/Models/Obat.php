<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'stock_obat'; // Nama tabel

    protected $primaryKey = 'id_obat'; // Menentukan nama kolom primary key

    protected $fillable = ['nama_obat', 'stok', 'jenis_obat'];
}
