<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery_video extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'description',
        'video_url',
    ];
}
