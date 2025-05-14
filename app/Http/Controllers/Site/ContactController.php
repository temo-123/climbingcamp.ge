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
        $feedbacks = Feedback::get();
        $gallery_photos = Gallery_photo::get();
        $gallery_videos = Gallery_video::get();
        $services = Service::get();
        $site_info = Site_info::get();
        $team_members = Team_member::get();
        $tours = Tour::get();

        $site_info = Site_info::get();
        $site_image = Site_image::get();

        $head_image = $site_image->where('key_word', 'header_image')->first();

        $data = [
            'head_image' => $head_image->image,
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
