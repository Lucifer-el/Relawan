<?php

namespace Database\Seeders;
 
use Illuminate\Database\Eloquent\factories\PermintaanObatFactory;
use App\Models\permintaan_obat;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ObatSeeder;
use  Database\Seeders\UserSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // permintaan_obat::insert([
        //     'nama' => 'Althaf',
        //     'kelas' => 10,
        //     'jurusan' => 'TPL',
        //     'nama_obat' => 'Bodrex',
        //     'jumlah' => 10,
        // ]);

        $this ->call([ObatSeeder::class,
        UserSeeder::class]
    );
    }
}
