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

        CRUD::field('image')->type('upload')->withFiles();
        // CRUD::field('images')->type('upload_multiple')->withFiles();

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
                'name' => 'text',
                'type' => 'summernote',
                'label' => "Description",
                'options' => [
                    'minheight' => 300,
                    'height' => 400
                ]
            ],
			// [
            //     'label' => "Head Image",
            //     'name' => "image",
            //     'type' => ($show = false ? 'view' : 'upload'),
            // ],
            // [
            //     'name' => 'images',
            //     'label' => 'Photos',
            //     'type' => 'upload_multiple',
            //     'upload' => true,
            //     'disk' => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
            //     // optional:
            //     'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
            // ],
        ]);
        
        CRUD::field('image')
            ->type('upload')
            ->withFiles([
                'disk' => 'public', // the disk where file will be stored
                'path' => 'uploads', // the path inside the disk where file will be stored
        ]);
    }
}
