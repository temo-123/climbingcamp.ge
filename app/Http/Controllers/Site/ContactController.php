<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Feedback;
use App\Models\Gallery_photo;
use App\Models\Gallery_video;
use App\Models\Service;
use App\Models\Team_member;
use App\Models\Tour;

use App\Models\Site_info;
use App\Models\Site_image;

class ContactController extends Controller
{
    function index() {
        $feedbacks = Feedback::where('published', '=', 1)->get();
        $services = Service::where('published', '=', 1)->get();
        $team_members = Team_member::where('published', '=', 1)->get();
        $tours = Tour::where('published', '=', 1)->get();

        $gallery_photos = Gallery_photo::get();
        $gallery_videos = Gallery_video::get();

        $site_info = Site_info::get();
        $site_image = Site_image::get();

        $head_image = $site_image->where('key_word', 'header_image')->first();

        $data = [
            'head_image' => [
                'image' => '../public/' . $head_image->image,
                'title' => $site_info->where('key_word', 'head_image_title')->first()->text, 
                'short_description' => $site_info->where('key_word', 'head_image_description')->first()->text
            ],
            'site_image' => $site_image,
            'site_info' => $site_info,
            'feedbacks'=>$feedbacks,
            'gallery_photos'=>$gallery_photos,
            'gallery_videos'=>$gallery_videos,
            'services'=>$services,
            'site_info'=>$site_info,
            'team_members'=>$team_members,
            'tours'=>$tours,
        ];

        return view('pages/contact')->with($data);
    }
}
