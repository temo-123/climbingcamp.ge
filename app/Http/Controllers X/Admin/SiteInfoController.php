<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class SiteInfoController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Site_info::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/site_info');
        CRUD::setEntityNameStrings('Site_info', 'Site_infos');

        CRUD::setColumns([
            [
                'name' => 'key_word',
                'type' => 'text',
                'label' => "Key word"
            ],
            [
                'name' => 'text',
                'type' => 'text',
                'label' => "Text",
            ]
        ]);

        CRUD::addFields([
            [
                'name' => 'text',
                'type' => 'text',
                'label' => "Text",
			],
        ]);
    }
}
