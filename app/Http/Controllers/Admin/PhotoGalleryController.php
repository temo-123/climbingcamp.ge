<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class PhotoGalleryController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Gallery_photo::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/photo_gallery');
        CRUD::setEntityNameStrings('Photo gallery', 'Gallery images');
        CRUD::field('image')->type('upload')->withFiles();

        $show = false;

        CRUD::setColumns([
            [
                'name' => 'image',
                'type' => 'image',
                'label' => "Image",
                'height' => '100px',
                // 'width'  => '30px',
            ],
            [
                'name' => 'description',
                'type' => 'text',
                'label' => "Name / Description"
            ],
        ]);

        CRUD::addFields([
            [
				'name' => 'description',
				'label' => 'Short Description',
				'type' => 'text',
				'attributs' => [
                    'required' => 'required',
                    'placeholder' => 'Size'
                ]
			],
			[
                'label' => "Article Image",
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'public/storage/gallery_img/',
                'upload' => true,
                'crop' => true, // set to true to allow cropping, false to disable
                // 'prefix' => '' // in case you only store the filename in the database, this text will be prepended to the database value
            ],
        ]);
    }
}
