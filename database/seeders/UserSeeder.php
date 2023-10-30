<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'testA',
            'email'=>'testA@test',
            'password'=>Hash::make('testtest'),
            'created_at'=>'2023/01/01 11:11:11'
        ]);
        DB::table('users')->insert([
            'name'=>'testB',
            'email'=>'testB@test',
            'password'=>Hash::make('testtest'),
            'created_at'=>'2023/01/01 11:11:11'
        ]);
    }
}
