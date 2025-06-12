<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Gallery_photo;
use App\Models\Gallery_video;
use App\Models\Site_info;
use App\Models\Site_image;

class GalleryController extends Controller
{
    function index() {
        $gallery_photos = Gallery_photo::get();
        $gallery_videos = Gallery_video::get();

        $site_info = Site_info::get();
        $site_image = Site_image::get();

        $head_image = $site_image->where('key_word', 'header_image')->first();

        $data = [
            'head_image' => $head_image->image,
            'site_image' => $site_image,
            'site_info' => $site_info,
            'gallery_photos'=>$gallery_photos,
            'gallery_videos'=>$gallery_videos,
        ];

        return view('pages/lists/gallery')->with($data);
    }
}
