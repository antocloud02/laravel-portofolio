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
                'title'=>'Contact Me',
                'description'=>'-',
                'address'=>'Jl. Poros Bulo, Timoreng Panua, Kec. Panca Rijang, Kabupaten Sidenreng Rappang, Sulawesi Selatan 91651',
                'phone'=>'+6289678169933',
                'email'=>'antocloud02@gmail.com',
                'copyright'=>'ARIYANTO, S.Kom',
        ]);
    }
}
