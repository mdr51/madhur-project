<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;


class Users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Sakshi Shrivastava',
            'email'=>'sakshi@gmail.com',
            'password'=> Hash::make('1234'),
            'mobile'=>'7373737373',
        ]);

        DB::table('users')->insert([
            'name'=>'Shubh Verma',
            'email'=>'shubh@gmail.com',
            'password'=> Hash::make('1234'),
            'mobile'=>'8484848484',
        ]);
    }
}
