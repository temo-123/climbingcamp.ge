<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Gallery_photo extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'description',
        'image',
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            Storage::delete(Str::replaceFirst('storage/','public/', $obj->image));
        });
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        // destination path relative to the disk above
        $destination_path = "gallery_img";
        $disk = "public";
        
        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            // Storage::delete(Str::replaceFirst('storage/','public/',$this->{$attribute_name}));
            Storage::delete(Str::replaceFirst($this->{$attribute_name}));

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // filename is generated -  md5($file->getClientOriginalName().random_int(1, 9999).time()).'.'.$file->getClientOriginalExtension()
        if ($this->attributes[$attribute_name] != 'storage/' . $destination_path . '/' . pathinfo($value)['basename']) {
            $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = pathinfo($value)['basename']);
            // $this->attributes[$attribute_name] = 'storage/' . $this->attributes[$attribute_name];

            $this->attributes[$attribute_name] = 'storage/' . $destination_path . '/' . pathinfo($value)['basename'];
        }

    }
}
