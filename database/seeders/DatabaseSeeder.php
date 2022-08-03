<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(PortofolioSeeder::class);
        $this->call(SkillSeeder::class);
    }
}
