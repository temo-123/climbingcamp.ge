<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TagCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FeedbackController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Feedback::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/feedback');
        CRUD::setEntityNameStrings('Feedback', 'Feedbacks');

        CRUD::setColumns([
            [
                'name' => 'person_name',
                'type' => 'text',
                'label' => "Person name",
            ],
            [
                'name' => 'country',
                'type' => 'text',
                'label' => "Country",
            ],
            [
                'name' => 'text',
                'type' => 'text',
                'label' => "Text"
            ],
        ]);

        CRUD::addFields([
            [
                'name' => 'person_name',
                'type' => 'text',
                'label' => "Name",
            ],
            [
                'name' => 'country',
                'type' => 'text',
                'label' => "Country",
            ],
            [
                'name' => 'text',
                'type' => 'text',
                'label' => "Feedback",
            ],
            [
                'name'      => 'image',
                'type'      => 'upload',
            ]
        ]);
    }
}
