<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class VideoGalleryController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Gallery_video::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/video_gallery');
        CRUD::setEntityNameStrings('Video_gallery', 'Video_gallerys');

        CRUD::setColumns([
            [
                'name' => 'description',
                'type' => 'text',
                'label' => "Description for video"
            ],
            [
                'name' => 'video_url',
                'type' => 'text',
                'label' => "Video URL",
            ]
        ]);

        CRUD::addFields([
            [
                'name' => 'description',
                'type' => 'text',
                'label' => "Short Description For Video"
            ],
            [
                'name' => 'video_url',
                'type' => 'text',
                'label' => "Video URL",
            ]

            // https://backpackforlaravel.com/docs/4.0/crud-fields#video-1
            //  'name' => 'video',
            //     'label' => 'Link to video file on YouTube or Vimeo',
            //     'type' => 'video',
            //     'youtube_api_key' => 'AIzaSycLRoVwovRmbIf_BH3X12IcTCudAErRlCE',
        ]);
    }
}
