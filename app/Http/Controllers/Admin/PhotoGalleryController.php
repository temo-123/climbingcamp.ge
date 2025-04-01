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
        CRUD::setEntityNameStrings('Photo_gallery', 'Photo_gallerys');

        CRUD::setColumns([
            [
                'name' => 'description',
                'type' => 'text',
                'label' => "Photo_gallery Name"
            ],
            [
                'name' => 'image',
                'type' => 'text',
                'label' => "Photo_gallery (Default value)",
            ]
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
				'name'  => 'image',
				'label' => 'Image',
                'type'      => 'upload',
			],
        ]);
    }
}
