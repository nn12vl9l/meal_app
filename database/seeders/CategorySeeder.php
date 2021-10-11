<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!DB::table('categories')->first()){
            DB::table('categories')->insert([
                ['name' => '炭水化物'],
                ['name' => '脂質'],
                ['name' => 'タンパク質'],
                ['name' => 'ミネラル'],
                ['name' => 'ビタミン'],
                ['name' => '食物繊維'],
                ['name' => 'ナトリウム'],
            ]);
        }
    }
}
