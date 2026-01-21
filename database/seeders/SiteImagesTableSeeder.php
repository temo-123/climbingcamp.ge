<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SiteImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $site_image = array(
            [
                'key_word' => 'header_image',
                'image' => null,
            ],
            [
                'key_word' => 'message_img',
                'image' => null,
            ],
            [
                'key_word' => 'about_us_image',
                'image' => null,
            ],
        );

        foreach ($site_image as $info) {
            DB::table('site_images')->insert([
                [                    
                    'key_word' => $info['key_word'],
                    'image' => $info['image'],
                ],
            ]);
        }
    }
}
