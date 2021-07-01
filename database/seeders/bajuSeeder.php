<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bajuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('baju')->insert([
            [
                'kode_baju' => 'BJ001',
                'nama_baju' => 'Converse Coach Jacket',
                'harga' => '750000',
                'deskripsi' => 'Tampilannya sangat elegan dan modis ',
                'file' => 'conversecoach.jpg',
                'stok' => '6',
                
            ],
            [
                'kode_baju' => 'BJ002',
                'nama_baju' => 'Erigo',
                'harga' => '400000',
                'deskripsi' => 'Hitam Bagus',
                'file' => 'erigo2.jpg',
                'stok' => '6',
                
            ],
            [
                'kode_baju' => 'BJ003',
                'nama_baju' => 'Supreme',
                'harga' => '4000000',
                'deskripsi' => 'Hitam Terang',
                'file' => 'supreme.jpg',
                'stok' => '6',
                
            ],
            [
                'kode_baju' => 'BJ004',
                'nama_baju' => 'Halo T-shirt',
                'harga' => '40000',
                'deskripsi' => 'Hitam Bohong',
                'file' => 'halotshirt.jpg',
                'stok' => '100',
                
            ]
            ]);
    }
}
