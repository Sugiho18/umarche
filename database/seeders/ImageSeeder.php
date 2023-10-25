<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image')->insert([
        [
            'owner_id'=>1,
            'filename'=>'sample.jpg',
            'title'=>null
        ],
    ]);
    }
}
