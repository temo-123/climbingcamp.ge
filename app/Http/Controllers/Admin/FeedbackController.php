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

        CRUD::field('image')->type('upload')->withFiles();

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

            [   // Switch
                'name'  => 'published',
                'type'  => 'switch',
                'label' => ' - Is This Article Public',

                // optional
                'color'    => '#232323', // in CoreUI v2 theme you can also specify bootstrap colors, like `primary`, `danger`, `success`, etc You can also overwrite the `--bg-switch-checked-color` css variable to change the color of the switch when it's checked
                // 'onLabel' => '✓',
                // 'offLabel' => '✕',
            ],
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
                'type' => 'summernote',
                'label' => "Text",
                'options' => [
                    'minheight' => 300,
                    'height' => 400
                ]
            ],
			// [
            //     'label' => "Article Image",
            //     'name' => "image",
            //     'type' => ($show = false ? 'view' : 'upload'),
            // ],
        ]);

        CRUD::field('image')
            ->type('upload')
            ->withFiles([
                'disk' => 'public', // the disk where file will be stored
                // 'path' => 'uploads', // the path inside the disk where file will be stored
        ]);
    }
}
