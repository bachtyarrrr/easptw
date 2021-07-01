<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin1',
                'level' => '1',
                'username' => 'admin1',
                'email' => 'admin1@admin.com',
                'no_telp' => '089688374045',
                'alamat' => 'Denpasar',
                'password' => Hash::make('admin1'),
            ],
            [
                'name' => 'masyaril',
                'level' => '2',
                'username' => 'masyaril',
                'email' => 'masyaril@gmail.com',
                'no_telp' => '081249273843',
                'alamat' => 'Surabaya',
                'password' => Hash::make('masyaril'),
            ],
            [
                'name' => 'ferryaji',
                'level' => '2',
                'username' => 'ferryaji',
                'email' => 'ferryaji@gmail.com',
                'no_telp' => '081249273843',
                'alamat' => 'Denpasar',
                'password' => Hash::make('ferryaji'),
            ]
        ]);
    }
}
