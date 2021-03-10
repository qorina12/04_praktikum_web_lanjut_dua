<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'image' => 'img/about-01.jpg',
                'title' => 'About this xtra blog',
                'description' => 'You can immediately download Xtra Blog Template from TemplateMo website for 
                100% free of charge. Etiam vehicula, tortor ac eleifend tincidunt, diam neque pellentesque ipsum, 
                a geugiat eros mauris eget lorem. Quisque in bibendum elit, in egestas turpis. Vestibulum ornare 
                sollicitudin congue. Aliquam lorem mi, maximus at iaculis ut, viverra vel mauris. Duis congue luctus 
                s, sodales tincidunt lectus fringilla ut. Nunc tempus at magna sed vestibulum.

                Proin et arcu ligula. Praesent quis erat eu est solliditudin tristique ut in arcu. Donec bibendum ex 
                id ligula semper dictum. Proin malesuada luctus auctor. Suspendisse ullamcorper, mi vel molestie 
                ornare, arcu magna euismod ipsum, in malesuada nulla magna ut enim. Morbi lacinia magna sed sapien 
                auctor, vitae luctus nunc cursus.',
                'draft' => 0,
            ]
            ];
            DB::table('abouts')->insert($data);
    }
}
