<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Team_member;
use App\Models\Gallery_photo;
use App\Models\Gallery_video;

use App\Models\Site_info;
use App\Models\Site_image;

class AboutUsController extends Controller
{
    function index(Request $request) {
        $team_members = Team_member::get();

        $site_info = Site_info::get();
        $site_image = Site_image::get();

        $gallery_photos = Gallery_photo::get();
        $gallery_videos = Gallery_video::get();

        $head_image = $site_image->where('key_word', 'header_image')->first();

        $gallery_photos = Gallery_photo::get();

        $data = [
            'head_image' => [
                'image' => '../public/' . $head_image->image,
                'title' => $site_info->where('key_word', 'about_us_title')->first()->text, 
                'short_description' => $site_info->where('key_word', 'about_us_text')->first()->text
            ],
            // 'head_image' => $head_image->image,
            'site_image' => $site_image,
            'site_info' => $site_info,

            'gallery_photos'=>$gallery_photos,
            'gallery_videos'=>$gallery_videos,
            'team_members'=>$team_members,

            'team_members'=>$team_members,
        ];
        
        return view('pages/about_us')->with($data);
    }
}
