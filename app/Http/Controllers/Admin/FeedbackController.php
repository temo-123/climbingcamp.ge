<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

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
        CRUD::setRoute(config('backpack.base.route_prefix') . '/Feedback');
        CRUD::setEntityNameStrings('Feedback', 'Feedbacks');

        CRUD::setColumns([
            [
                'name' => 'm_key',
                'type' => 'text',
                'label' => "feedback Name"
            ],
            [
                'name' => 'm_value',
                'type' => 'text',
                'label' => "feedback (Default value)",
            ]
        ]);

        CRUD::addFields([
            [
				'name' => 'm_key',
				'label' => 'feedback kay',
				'type' => 'text',
				'attributs' => [
                    'required' => 'required',
                    'placeholder' => 'Size'
                ]
			],
			[
				'name'  => 'm_value',
				'label' => 'feedback value',
				'type'  => 'text',
				// 'attributes' => [
				// 	'required'    => 'required',
				// 	'placeholder' => 'New feedback'
				// ]
			],
        ]);
    }
}
