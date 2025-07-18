<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class Team_member extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'published',
        'name',
        'position',
        'description',
        'image',

        'facebook',
        'instagram',
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            if (isset($obj->image)){
                Storage::delete(Str::replaceFirst('storage/','public/', $obj->image));
            }
        });
    }
    
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        // destination path relative to the disk above
        $destination_path = "team_members";
        $disk = "public";
        
        if ($value==null && $this->{$attribute_name} != null) {
            // delete the image from disk
            !is_null($value->image) && Storage::delete(Str::replaceFirst('storage/','public/',$this->{$attribute_name}));
    
            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }
    
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
        $this->attributes[$attribute_name] = $this->attributes[$attribute_name];
    }
}
