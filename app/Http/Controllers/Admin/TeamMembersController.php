<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class TeamMembersController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Team::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/team');
        CRUD::setEntityNameStrings('Team', 'Teams');

        
        CRUD::setColumns([
            [
                'name' => 'name',
                'type' => 'text',
                'label' => "Person name",
            ],
            [
                'name' => 'position',
                'type' => 'text',
                'label' => "Position",
            ],
            [
                'name' => 'description',
                'type' => 'text',
                'label' => "Description"
            ],
        ]);

        CRUD::addFields([
            [
                'name' => 'name',
                'type' => 'text',
                'label' => "Person name",
            ],
            [
                'name' => 'position',
                'type' => 'text',
                'label' => "Position",
            ],
            [
                'name' => 'description',
                'type' => 'text',
                'label' => "Description"
            ],
            [
                'name'      => 'image',
                'type'      => 'upload',
            ]
        ]);
    }
}
