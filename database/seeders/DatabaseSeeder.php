<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\MataKuliah;
use App\Models\User;
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

        for ($i = 0; $i < 5; $i++) {
            Dosen::create([
                'nama' => 'Dosen' . $i,
                'nidn' => 0024556 + $i,
                'bidang' => 'Bidang' . $i
            ]);
        }

        $dosens = Dosen::all();

        // List nama mata kuliah
        $mata_kuliah_list = [
            'Matematika Diskrit',
            'Basis Data',
            'Pemrograman Web',
            'Algoritma dan Struktur Data',
            'Sistem Operasi',
            'Jaringan Komputer',
            'Rekayasa Perangkat Lunak',
            'Statistika',
            'Kecerdasan Buatan',
            'Interaksi Manusia dan Komputer'
        ];

        foreach ($mata_kuliah_list as $index => $nama) {
            MataKuliah::create([
                'nama' => $nama,
                'kode' => 'MK' . str_pad($index + 1, 3, '0', STR_PAD_LEFT),
                'sks' => rand(2, 4),
                'kode_dosen' => $dosens->random()->id,
            ]);
        }
    }
}
