<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class SiteImageController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Site_image::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/site_image');
        CRUD::setEntityNameStrings('Site Image', 'Site Images');
        CRUD::field('image')->type('upload')->withFiles();

        CRUD::setColumns([
            [
                'name' => 'image',
                'type' => 'image',
                'label' => "Image",
                'height' => '100px',
            ],
            [
                'name' => 'key_word',
                'type' => 'text',
                'label' => "Kay word"
            ],
        ]);

        CRUD::addFields([
			[
                'label' => "Image",
                'name' => "image",
                'type' => ($show = false ? 'view' : 'upload'),
                'view' => 'public/storage/gallery_img',
                'upload' => true,
                'crop' => true, // set to true to allow cropping, false to disable
                'prefix' => '' // in case you only store the filename in the database, this text will be prepended to the database value
            ],
        ]);
    }
}
