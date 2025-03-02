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
                'name' => 'm_key',
                'type' => 'text',
                'label' => "Photo_gallery Name"
            ],
            [
                'name' => 'm_value',
                'type' => 'text',
                'label' => "Photo_gallery (Default value)",
            ]
        ]);

        CRUD::addFields([
            [
				'name' => 'm_key',
				'label' => 'Photo_gallery kay',
				'type' => 'text',
				'attributs' => [
                    'required' => 'required',
                    'placeholder' => 'Size'
                ]
			],
			[
				'name'  => 'm_value',
				'label' => 'Photo_gallery value',
				'type'  => 'text',
				// 'attributes' => [
				// 	'required'    => 'required',
				// 	'placeholder' => 'New Photo_gallery'
				// ]
			],
        ]);
    }
}
