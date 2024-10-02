<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NamaModels;

class NamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NamaModels::create([
            'nama' => 'Althaf',
            'kelas' => '10',
            'jurusan' => 'TPL',
            'nama_obat' => 'Bodrex',
            'jumlah' => '10',
        ]);
    }
}
