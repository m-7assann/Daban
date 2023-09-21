<?php

namespace Database\Seeders;

use App\Models\Support;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $support = [
            'address' => 'Palestine, Gaza City',
<<<<<<< HEAD
            'email' => 'daban@gmail.com',
            'phone' => '0599265058(972+)',
=======
            'email' => 'm.7ass4n@gmail.com',
            'phone' => ' 0599265058 (972+) ',
>>>>>>> a3be5ab5940ce1a94174911d58a81b2b5c5f3f1e
        ];

        Support::create($support);
    }
}
