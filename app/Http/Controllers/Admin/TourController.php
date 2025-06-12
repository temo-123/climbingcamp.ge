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
        CRUD::field('images')->type('upload_multiple')->withFiles();

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
                'type' => 'summernote',
                'label' => "Description",
                'options' => [
                    'minheight' => 300,
                    'height' => 400
                ]
            ],
			[
                'label' => "Article Image",
                'name' => "image",
                'type' => ($show = false ? 'view' : 'upload'),
            ],
            // [
                // 'name'      => 'images',
                // 'label'     => 'Gallery images',
                // 'type'      => 'upload_multiple',
                // 'upload'    => true,
                // 'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // // optional:
                // // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified


                // 'name'      => 'images',
                // 'label' => "Gallery images",
                // 'type'      => 'browse_multiple',
                // 'update' => true,
                // 'disc' => 'public',
                // 'prefix' => 'uploads/',

                // 'crop' => true,
            // ],
            [
                'name' => 'images',
                'label' => 'Photos',
                'type' => 'upload_multiple',
                'upload' => true,
                'disk' => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
                'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
            ],
        ]);
    }
}
