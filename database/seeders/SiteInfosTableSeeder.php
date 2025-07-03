<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SiteInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $site_info = array(
            [
                'key_word' => 'email',
                'text' => 'samsonadze.temo9@gmail.com',
            ],
            [
                'key_word' => 'head_image_title',
                'text' => 'Welcome to katskhi house',
            ],
            [
                'key_word' => 'head_image_description',
                'text' => 'Best Place For Outdoor Climbing in Georgia',
            ],
            [
                'key_word' => 'welcome_title',
                'text' => 'Welcome',
            ],
            [
                'key_word' => 'welcome_text',
                'text' => 'Welcome to Katskhi Climbers House',
            ],
            [
                'key_word' => 'gallery_title',
                'text' => 'Gallery',
            ],
            [
                'key_word' => 'destination_title',
                'text' => 'Destenations',
            ],
            [
                'key_word' => 'tours_text',
                'text' => 'Ouer Tours',
            ],
            [
                'key_word' => 'tours_title',
                'text' => 'Tours',
            ],
            [
                'key_word' => 'phone_number',
                'text' => '(+995)598 45 70 48',
            ],
            [
                'key_word' => 'address',
                'text' => 'Katskhi',
            ],
            [
                'key_word' => 'map',
                'text' => 'map',
            ],
            [
                'key_word' => 'message_form_title',
                'text' => 'Contact us',
            ],
            [
                'key_word' => 'message_form_text',
                'text' => '',
            ],
            [
                'key_word' => 'video_gallery_title',
                'text' => 'Promo video',
            ],
            [
                'key_word' => 'video_gallery_text',
                'text' => '',
            ],
            [
                'key_word' => 'team_members_title',
                'text' => 'Ouer Teem',
            ],
            [
                'key_word' => 'team_members_text',
                'text' => 'Ouer Teem members',
            ],
            [
                'key_word' => 'feedbacks_title',
                'text' => 'Feedbacks',
            ],
            [
                'key_word' => 'feedbacks_text',
                'text' => 'Gests Feedbacks',
            ],
            [
                'key_word' => 'site_title',
                'text' => 'Katskhi House',
            ],
            [
                'key_word' => 'right_reserved_text',
                'text' => 'All Right Reserved',
            ],
            [
                'key_word' => 'long_description_title',
                'text' => '',
            ],
            [
                'key_word' => 'long_description_text',
                'text' => '',
            ],
        );

        foreach ($site_info as $info) {
            DB::table('site_infos')->insert([
                [                    
                    'key_word' => $info['key_word'],
                    'text' => $info['text'],
                ],
            ]);
        }
    }
}
