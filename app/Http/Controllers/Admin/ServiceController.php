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
                'type' => 'text',
                'label' => "Short description",
            ],
            [
                'name' => 'text',
                'type' => 'text',
                'label' => "Text",
            ],
            [
                'name'      => 'logo',
                // 'type' => 'image',
                'type'      => 'upload_multiple',
            ]
        ]);
    }
}
