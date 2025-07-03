<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tour;
use App\Models\Feedback;
use App\Models\Gallery_photo;
use App\Models\Gallery_video;
use App\Models\Site_info;
use App\Models\Site_image;

class ToursController extends Controller
{
    function index() {
        $gallery_photos = Gallery_photo::get();
        $gallery_videos = Gallery_video::get();

        $site_info = Site_info::get();
        $site_image = Site_image::get();

        $head_image = $site_image->where('key_word', 'header_image')->first();

        $tours = Tour::get();
        $feedbacks = Feedback::get();

        $data = [
            'head_image' => $head_image->image,
            'site_image' => $site_image,
            'site_info' => $site_info,
            'gallery_photos'=>$gallery_photos,
            'gallery_videos'=>$gallery_videos,
            'tours'=>$tours,
            'feedbacks'=>$feedbacks,
        ];

        return view('pages/lists/tours')->with($data);
    }

    function article_page(Request $request) {
        $gallery_photos = Gallery_photo::get();
        $tour = Tour::where('id', '=', $request->id)->first();
        
        $site_info = Site_info::get();
        $site_image = Site_image::get();

        $head_image = $tour->image;

        $data = [
            // 'head_image' => $head_image->image,
            'site_image' => $site_image,
            'site_info' => $site_info,
            'head_image' => [
                'image' => '../storage/' . $tour -> image,
                'title' => $tour -> title,
                'short_description' => $tour -> description
            ],
            'gallery_photos' => $gallery_photos,
            'article' => $tour,
        ];

        return view('pages/articles/article')->with($data);
    }
}
