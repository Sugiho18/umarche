<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id'=>1,
                'name'=>'ここに店名',
                'information'=>'ここに店舗の説明ここに店舗の説明ここに店舗の説明ここに店舗の説明',
                'filename'=>'sample1.jpg',
                'is_selling'=>true
            ],
            [
                'owner'=>2,
                'name'=>'ここに店名',
                'information'=>'ここに店舗の説明ここに店舗の説明ここに店舗の説明ここに店舗の説明',
                'filename'=>'sample2.jpg',
                'is_selling'=>true
            ],
            [
                'owner'=>3,
                'name'=>'ここに店名',
                'information'=>'ここに店舗の説明ここに店舗の説明ここに店舗の説明ここに店舗の説明',
                'filename'=>'sample3.jpg',
                'is_selling'=>true
            ],
        ]);

    }
}
