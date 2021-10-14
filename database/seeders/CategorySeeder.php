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
        $categories = [
                ['id' => '1', 'name' => '炭水化物'],
                ['id' => '2', 'name' => '脂質'],
                ['id' => '3', 'name' => 'タンパク質'],
                ['id' => '4', 'name' => 'ミネラル'],
                ['id' => '5', 'name' => 'ビタミン'],
                ['id' => '6', 'name' => '食物繊維'],
                ['id' => '7', 'name' => 'ナトリウム'],
            ];
            DB::table('categories')->insert($categories);
        }
    }

