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
        CRUD::setModel(\App\Models\Video_gallery::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/Video_gallery');
        CRUD::setEntityNameStrings('Video_gallery', 'Video_gallerys');

        CRUD::setColumns([
            [
                'name' => 'm_key',
                'type' => 'text',
                'label' => "Video_gallery Name"
            ],
            [
                'name' => 'm_value',
                'type' => 'text',
                'label' => "Video_gallery (Default value)",
            ]
        ]);

        CRUD::addFields([
            [
				'name' => 'm_key',
				'label' => 'Video_gallery kay',
				'type' => 'text',
				'attributs' => [
                    'required' => 'required',
                    'placeholder' => 'Size'
                ]
			],
			[
				'name'  => 'm_value',
				'label' => 'Video_gallery value',
				'type'  => 'text',
				// 'attributes' => [
				// 	'required'    => 'required',
				// 	'placeholder' => 'New Video_gallery'
				// ]
			],
        ]);
    }
}
