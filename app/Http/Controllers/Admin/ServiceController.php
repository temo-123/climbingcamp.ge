<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ServiceController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Service::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/service');
        CRUD::setEntityNameStrings('Service', 'Services');
        CRUD::field('images')->type('upload_multiple')->withFiles();

        CRUD::setColumns([
            [
                'name' => 'title',
                'type' => 'text',
                'label' => "Title",
            ],
            [
                'name' => 'description',
                'type' => 'text',
                'label' => "Short description",
            ],
        ]);

        CRUD::addFields([
            // [   // Checkbox
            //     'name' => 'active',
            //     'label' => 'Public (Click hear for published article)',
            //     'type' => 'checkbox'
            // ],
            [
                'name' => 'title',
                'type' => 'text',
                'label' => "Title",
            ],
            [
                'name' => 'description',
                'type' => 'summernote',
                'label' => "Short description",
                'options' => [
                    'minheight' => 300,
                    'height' => 400
                ]
            ],
            [
                'name' => 'text',
                'type' => 'summernote',
                'label' => "Text",
                'options' => [
                    'minheight' => 300,
                    'height' => 400
                ]
            ],
            [
                'name' => 'logo',
                'type' => 'text',
                'label' => 'Logo ( https://fontawesome.com/v4/icons/ )',
            ],
            [
                'name'      => 'images',
                'label' => "Gallery images",
                'type'      => 'upload_multiple',
                'update' => true,
                'disk' => 'uploads',
                'prefix' => 'uploads/',
                'view' => 'public/storage/services_img/',

                'crop' => true,
            ],
        ]);
    }
}
