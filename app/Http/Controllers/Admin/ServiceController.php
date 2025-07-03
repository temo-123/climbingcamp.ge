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
        
        // CRUD::field('images')->type('upload_multiple')->withFiles();
        CRUD::field('image')->type('upload')->withFiles();

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
            [
                'name' => 'image',
                'type' => 'image',
                'label' => "Image",
                'height' => '100px',
            ],
        ]);

        CRUD::addFields([
            // [   // Checkbox
            //     'name' => 'active',
            //     'label' => 'Public (Click hear for published article)',
            //     'type' => 'checkbox'
            // ],
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
                'label' => "Title",
            ],
            [
                'name' => 'description',
                'type' => 'summernote',
                'label' => "Short description",
                'options' => [
                    'minheight' => 300,
                    'height' => 400
                ]
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
            [
                'name' => 'logo',
                'type' => 'text',
                'label' => 'Logo ( https://fontawesome.com/v4/icons/ )',
            ],
			[
                'label' => "Image",
                'name' => "image",
                'type' => ($show = false ? 'view' : 'upload'),
                'view' => 'public/storage/service_img',
                'upload' => true,
                'crop' => true, // set to true to allow cropping, false to disable
                'prefix' => '' // in case you only store the filename in the database, this text will be prepended to the database value
            ],
            // [
            //     'name'      => 'images',
            //     'label' => "Gallery images",
            //     'type'      => 'upload_multiple',
            //     'update' => true,
            //     'disk' => 'uploads',
            //     'prefix' => 'uploads/',
            //     'view' => 'public/storage/services_img/',

            //     'crop' => true,
            // ],
        ]);
    }
}
