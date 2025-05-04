<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tour;
use App\Models\Feedback;
use App\Models\Gallery_photo;

class ToursController extends Controller
{
    function index() {
        $tours = Tour::get();
        $feedbacks = Feedback::get();

        $data = [
            'tours'=>$tours,
            'feedbacks'=>$feedbacks,
        ];

        return view('pages/lists/tours')->with($data);
    }

    function article_page(Request $request) {
        $gallery_photos = Gallery_photo::get();
        // $gallery_photos = Tour::where('id', '=', $request->id)->first()->images;
        $tour = Tour::where('id', '=', $request->id)->first();
        
        $data = [
            'head_image' => [
                'image' => '../public/storage/' . $tour -> image,
                'title' => $tour -> title,
                'short_description' => $tour -> description
            ],
            'gallery_photos' => $gallery_photos,
            'article' => $tour,
        ];

        // dd($data[]);

        return view('pages/articles/article')->with($data);
    }
}
