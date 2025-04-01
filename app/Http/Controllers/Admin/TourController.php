<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class TourController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Tour::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tour');
        CRUD::setEntityNameStrings('Tour', 'Tours');

        CRUD::setColumns([
            [
                'name' => 'title',
                'type' => 'text',
                'label' => "Toure title",
            ],
            [
                'name' => 'location',
                'type' => 'text',
                'label' => "Tout location",
            ],
            [
                'name' => 'days',
                'type' => 'text',
                'label' => "How Match days?"
            ],
            [
                'name' => 'persons',
                'type' => 'text',
                'label' => "How Match persons?"
            ],
            [
                'name' => 'price',
                'type' => 'text',
                'label' => "What the price?"
            ],
            [
                'name' => 'description',
                'type' => 'text',
                'label' => "Description"
            ],
        ]);

        CRUD::addFields([
            [
                'name' => 'title',
                'type' => 'text',
                'label' => "Toure title",
            ],
            [
                'name' => 'location',
                'type' => 'text',
                'label' => "Tout location",
            ],
            [
                'name' => 'days',
                'type' => 'text',
                'label' => "How Match days?"
            ],
            [
                'name' => 'persons',
                'type' => 'text',
                'label' => "How Match persons?"
            ],
            [
                'name' => 'price',
                'type' => 'text',
                'label' => "What the price?"
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
