<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name'=>'test1',
                'email'=>'test1@test',
                'password'=>Hash::make('testtest1'),
                'created_at'=>'2020/10/10 11:11:11'
            ],
            [
                'name'=>'test2',
                'email'=>'test2@test',
                'password'=>Hash::make('testtest2'),
                'created_at'=>'2020/10/10 11:11:11'
            ],
            [
                'name'=>'test3',
                'email'=>'test3@test',
                'password'=>Hash::make('testtest3'),
                'created_at'=>'2020/10/10 11:11:11'
            ]
        ]);
    }
}
