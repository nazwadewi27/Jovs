<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
            'judul' => 'Affh iyh?',
            'waktu_kerja' => 'kapan yh? ska2 ak',
            'media' => 'igeh'
        ]);
    }
}
