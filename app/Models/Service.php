<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class Service extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'text',
        'logo'
    ];

    // function setImageAttribute($value) {
    //     $attribute_name = "image";
    //     $disc = 'public';
    //     $destenatione_path = 'images';

    //     if($value == null){
    //         Storage::disc($disc)->delete($this->{$attribute_name});
    //         $this->attributes[$attribute_name] = null;
    //     }

    //     if(stars_with($value, 'data.image')){
    //         $image = Image::make($value)->encode('jpg', 90);
    //         $filename = md5($value.time()) . '.jpg';

    //         Storage::disc($disc)->put($destenatione_path . '/' . $filename, $image->stream());
    //         $public_destenation_path = Str::replaceFirst('public/', '', $destenatione_path);
    //         $this->attributes[$attribute_name] = $public_destenation_path . '/' . $filename;
    //     }
    // }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        // or use your own disk, defined in config/filesystems.php
        $disk = config('backpack.base.root_disk_name');
        // destination path relative to the disk above
        $destination_path = "public/uploads/folder_1/folder_2";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (Str::startsWith($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value)->encode('jpg', 90);

            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());

            // 3. Delete the previous image, if there was one.
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // 4. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it
            // from the root folder; that way, what gets saved in the db
            // is the public URL (everything that comes after the domain name)
            $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
        }
    }
}
