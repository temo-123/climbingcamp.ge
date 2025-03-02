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
                'name' => 'm_key',
                'type' => 'text',
                'label' => "Site_info Name"
            ],
            [
                'name' => 'm_value',
                'type' => 'text',
                'label' => "Site_info (Default value)",
            ]
        ]);

        CRUD::addFields([
            [
				'name' => 'm_key',
				'label' => 'Site_info kay',
				'type' => 'text',
				'attributs' => [
                    'required' => 'required',
                    'placeholder' => 'Size'
                ]
			],
			[
				'name'  => 'm_value',
				'label' => 'Site_info value',
				'type'  => 'text',
				// 'attributes' => [
				// 	'required'    => 'required',
				// 	'placeholder' => 'New Site_info'
				// ]
			],
        ]);
    }
}
