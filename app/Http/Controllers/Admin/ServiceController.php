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
        // CRUD::field('images')->type('upload_multiple')->withFiles();

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
                'label' => 'Logo',
            ],
            [
                'name'      => 'images',
                'label' => "Gallery images",
                // 'type' => 'image',
                'type'      => 'upload_multiple',
                'update' => true,
                'disc' => 'public',
                'prefix' => 'uploads/',

                'crop' => true,
            ],
        ]);
    }
}
