<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::insert([
            [
                'name' => 'Laravel',
            ],
            [
                'name' => 'CodeIgniter',
            ],
            [
                'name' => 'React Native',
            ],
            [
                'name' => 'Apache Cordova',
            ],
            [
                'name' => 'JQuery',
            ],
            [
                'name' => 'Node JS',
            ],
            [
                'name' => 'MySQL',
            ],
            [
                'name' => 'Firebase',
            ],
        ]);
    }
}
