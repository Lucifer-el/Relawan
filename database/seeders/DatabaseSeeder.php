<?php

namespace Database\Seeders;
 
use Illuminate\Database\Eloquent\factories\PermintaanObatFactory;
use App\Models\permintaan_obat;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        permintaan_obat::create([
            'nama' => 'Althaf',
            'kelas' => 10,
            'jurusan' => 'TPL',
            'nama_obat' => 'Bodrex',
            'jumlah' => 10,
        ]);
    }
}
