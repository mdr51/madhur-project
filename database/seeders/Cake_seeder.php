<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\Models\Cake;

class Cake_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('cake')->insert([
            [
                'name'=>'Vanilla Cake',
                'category'=>'cakes',
                'description'=>'This Vanilla Cake',
                'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/13.jpg',
                'cost'=>'300 Rs/Kg',
            ],
            [
                'name'=>'Butter Cake',
                'category'=>'cakes',
                'description'=>'This Butter Cake',
                'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/14.jpg',
                'cost'=>'400 Rs/Kg',
            ],
            [
                'name'=>'Pineapple Cake',
                'category'=>'cakes',
                'description'=>'This Pineapple Cake',
                'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/15.jpg',
                'cost'=>'200 Rs/Kg',
            ],
            [
                'name'=>'Pineapple Cake',
                'category'=>'cakes',
                'description'=>'This Pineapple Cake',
                'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/16.jpg',
                'cost'=>'280 Rs/Kg',
            ],
            [
                'name'=>'Chochlate Cake',
                'category'=>'cakes',
                'description'=>'This Chochlate Cake',
                'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/17.jpg',
                'cost'=>'480 Rs/Kg',
            ],
            [
                'name'=>'Candy Cake',
                'category'=>'cakes',
                'description'=>'This Candy Cake',
                'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/10.jpg',
                'cost'=>'380 Rs/Kg',
            ]

        ]);

    }
}
