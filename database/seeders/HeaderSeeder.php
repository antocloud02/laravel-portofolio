<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::create([
            'title' => 'LARAVEL PORTOFOLIO',
            'navbar_title' => 'PORTOFOLIO',
            'up_text' => 'ARIYANTO, S.Kom',
            'down_text' => 'SOFTWARE DEVELOPER',
            'is_active' => 1,
        ]);
    }
}
