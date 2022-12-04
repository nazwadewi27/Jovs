<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        Kategori::create([
            'nama_kategori' => 'Hijab'
        ]);

        Kategori::create([
            'nama_kategori' => 'Wad'
        ]);

        Kategori::create([
            'nama_kategori' => 'Pashmina'
        ]);

        Kategori::create([
            'nama_kategori' => 'Pakaian Pria'
        ]);

        Kategori::create([
            'nama_kategori' => 'Pakaian Wanita'
        ]);

        Produk::create([
            'id_kategori' => 1,
            'gambar' => 'produk_135486525.jpg',
            'nama_produk' => 'Hijab Alila',
            'deskripsi' => 'Hijab berbahan lembut',
            'harga_jual' => '100000',
        ]);
    }
}
