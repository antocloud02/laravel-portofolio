<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::insert([
            [
                'title'=>'Importir.co.id',
                'description'=>'Importir.co.id adalah platform yang membantu Anda untuk melakukan impor dengan cepat, mudah dan transparan dari situs e-commerce luar negeri Tiongkok / China dengan biaya layanan yang terjangkau berkat manajemen sistem kami yang cepat, efektif dan efisien. Layanan administrasi impor yang lakukan meliputi pajak, bea cukai dan biaya kirim internasional. Semua hal tersebut sudah diurus oleh team professional importir.co.id, kamu tinggal terima beres, barang impor kamu akan tiba dengan cepat dan aman.',
                'image'=>'https://img.it-97.com/Importir-co-id.png',
            ],[
                'title'=>'MonitorWa.com',
                'description'=>'Website penyedia layanan API WhatSapp, dan layanan yang dapat membantu manajemen chat WA suatu bisnis.',
                'image'=>'https://img.it-97.com/MonitorWa-com-Login.png',
            ],[
                'title'=>'Beli.Mrimportir.com',
                'description'=>'Website marketplace produk Cina dengan pelayanan import barang dari Cina ke Indonesia dan sampai ke tangan pembeli.',
                'image'=>'https://img.it-97.com/beli-mrimportir-com.png',
            ],
        ]);
    }
}
