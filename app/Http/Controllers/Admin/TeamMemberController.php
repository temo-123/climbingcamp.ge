<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class TeamMemberController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Team_member::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/team_member');
        CRUD::setEntityNameStrings('Team', 'Teams');

        CRUD::field('image')->type('upload')->withFiles();
        
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
                'type' => 'summernote',
                'label' => "Description",
                'options' => [
                    'minheight' => 300,
                    'height' => 400
                ]
            ],
            [
                'name'      => 'image',
                'label' => "Member portret",
                // 'type' => 'image',
                'type'      => 'upload',
                'update' => true,
                'disc' => 'public',
                'prefix' => 'uploads/',

                'crop' => true,
            ],
        ]);

        CRUD::field('image')
            ->type('upload')
            ->withFiles([
                'disk' => 'public', // the disk where file will be stored
                // 'path' => 'uploads', // the path inside the disk where file will be stored
        ]);
    }
}
