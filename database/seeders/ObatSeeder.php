<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        obat::create([
            'id_obat' => 100,
            'nama_obat' => 'Paracetamol',
            'stok' => '20'
            
        ]);

        obat::create([
            'id_obat' => 20,
            'nama_obat' => 'ashypixiation',
            'stok' => 30
        ]);
    }
}
