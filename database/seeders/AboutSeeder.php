<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
                'title' => 'My Profile',
                'description' => 'Saya seorang software developer berusia 25 tahun dengan pengalaman 2 tahun kerja di bidang IT untuk perusahaan PT. Prima Syirkah International. Saya bisa bekerja sebagai Front End, Back End atau juga Fullstack.',
                'name' => 'ARIYANTO, S.Kom',
                'email' => 'antocloud02@gmail.com',
                'role' => 'Software Developer',
                'phone' => '+6289678169933',
                'is_active' => 1,
        ]);
    }
}
