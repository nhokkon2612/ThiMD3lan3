<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                ['name'=>'Cà phê'],
                ['name'=>'Sinh tố'],
                ['name'=>'Trà sữa'],
                ['name'=>'Rượu'],
            ]
        );
    }
}
