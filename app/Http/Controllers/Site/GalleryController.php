<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Gallery_photo;
use App\Models\Gallery_video;

class GalleryController extends Controller
{
    function index() {
        $gallery_photos = Gallery_photo::get();
        $gallery_videos = Gallery_video::get();

        $data = [
            'gallery_photos'=>$gallery_photos,
            'gallery_videos'=>$gallery_videos,
        ];

        return view('pages/lists/gallery')->with($data);
    }
}
