<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Brand extends Model
{
    use Translatable;

    protected $with = ['translations'];
    protected $guarded = [];

    protected $translatedAttributes = ['name'];


    protected static function boot()
    {
        parent::boot();
        self::deleting(function ($raw) {
            if ($raw->image)
                if (file_exists(public_path('storage/' . $raw->image)))
                    File::delete(public_path('storage/' . $raw->image));
        });
    }
}
