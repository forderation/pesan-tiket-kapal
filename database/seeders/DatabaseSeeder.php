<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
        ]);

        \DB::table('customers')->insert([
            'nama_user' => 'Aura',
            'email' => 'aura@gmail.com',
            'no_telp' => '085699878959',
            'usia' => 21,
            'password' => Hash::make('123'),
        ]);

        \DB::table('customers')->insert([
            'nama_user' => 'Anin',
            'email' => 'anin@gmail.com',
            'no_telp' => '085965878',
            'usia' => 21,
            'password' => Hash::make('123'),
        ]);

        \DB::table('speedboats')->insert([
            'nama_speedboat' => 'Speedboat 1',
            'tanggal_berangkat' => '2021-03-29',
            'jam_berangkat' => '01:46:00',
            'no_rekening' => '2532671526 Bank BRI',
            'rute' => 'Tarakan - Malinau',
            'harga' => 100000
        ]);

        \DB::table('speedboats')->insert([
            'nama_speedboat' => 'Speedboat 2',
            'tanggal_berangkat' => '2021-03-10',
            'jam_berangkat' => '01:46:22',
            'no_rekening' => '1652435712 Bank BNI',
            'rute' => 'Tarakan - Malinau',
            'harga' => 100000
        ]);
        
        
        \DB::table('speedboats')->insert([
            'nama_speedboat' => 'Speedboat 3',
            'tanggal_berangkat' => '2021-03-31',
            'jam_berangkat' => '01:46:44',
            'no_rekening' => '4367567523 Bank Mandiri',
            'rute' => 'Tarakan - Malinau',
            'harga' => 100000
        ]);
    }
}
