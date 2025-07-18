<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class Service extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'published',
        'title',
        'description',
        'text',
        'logo',
        'image',
        'images'
    ];

    protected $casts = [
        'images' => 'array'
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            if (isset($obj->images)){
                dd(json_decode($obj->images));
                Storage::delete(Str::replaceFirst('storage/','public/', $obj->images));
            }
        });
    }
    
    // public function setImagesAttribute($value)
    // {
    //     $attribute_name = "images";
    //     $disk = "public";
    //     $destination_path = "services_img/";

    //     $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    // }
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        // destination path relative to the disk above
        $destination_path = "services_img";
        $disk = "public";
        
        if ($value==null && $this->{$attribute_name} != null) {
            // delete the image from disk
            Storage::delete(Str::replaceFirst('storage/','public/',$this->{$attribute_name}));
    
            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }
    
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
        $this->attributes[$attribute_name] = $this->attributes[$attribute_name];
    }

    // public function setImagesAttribute($value)
    // {
    //     // dd($value);
    //     $attribute_name = "images";
    //     // destination path relative to the disk above
    //     $destination_path = "services_img";
    //     $disk = "public";

    //     $originalModelValue = $this->getOriginal()[$attribute_name] ?? [];

    //     if (! is_array($originalModelValue)) {
    //         $attribute_value = json_decode($originalModelValue, true) ?? [];
    //     } else {
    //         $attribute_value = $originalModelValue;
    //     }

    //     $files_to_clear = request()->get('clear_'.$attribute_name);

    //     // if a file has been marked for removal,
    //     // delete it from the disk and from the db
    //     if ($files_to_clear) {
    //         foreach ($files_to_clear as $key => $filename) {
    //             \Storage::disk($disk)->delete($filename);
    //             $attribute_value = Arr::where($attribute_value, function ($value, $key) use ($filename) {
    //                 return $value != $filename;
    //             });
    //         }
    //     }

    //     // if a new file is uploaded, store it on disk and its filename in the database
    //     if (request()->hasFile($attribute_name)) {
    //         foreach (request()->file($attribute_name) as $file) {
    //             if ($file->isValid()) {
    //                 // 1. Generate a new file name
    //                 $new_file_name = md5($file->getClientOriginalName().random_int(1, 9999).time()).'.'.$file->getClientOriginalExtension();

    //                 // 2. Move the new file to the correct path
    //                 $file_path = $file->storeAs($destination_path, $new_file_name, $disk);

    //                 // 3. Add the public path to the database
    //                 $attribute_value[] = $file_path;
    //             }
    //         }
    //     }
    //     $this->attributes[$attribute_name] = json_encode($attribute_value);
    // }
}
