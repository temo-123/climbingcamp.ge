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
            // [
            //     'name' => 'description',
            //     'type' => 'text',
            //     'label' => "Description"
            // ],
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
                'type' => 'summernote',
                'label' => "Description",
                'options' => [
                    'minheight' => 300,
                    'height' => 400
                ]
            ],
            // [
            //     'name'      => 'image',
            //     'type'      => 'upload',
            // ],

            // [
            //     'label' => "Article Image",
            //     'name' => "image",
            //     'type' => ($show ? 'view' : 'upload'),
            //     'view' => 'partials/image',
            //     'upload' => true,
            // ]

            [
                'name'      => 'image',
                'label' => "Article image",
                // 'type' => 'image',
                'type'      => 'upload',
                'update' => true,
                'disc' => 'public',
                'prefix' => 'uploads/',

                'crop' => true,
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
