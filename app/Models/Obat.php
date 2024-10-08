<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Obat extends Model
{
    use HasFactory;
    protected $table = 'stock_obat';
    protected $fillable = ['id_obat', 'nama_obat', 'jenis_obat', 'stok'];
    
}
