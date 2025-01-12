<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Testimonial extends Model
{
    use Translatable;

    protected $with = ['translations'];
    protected $guarded = [];

    protected $translatedAttributes = ['name', 'job_title', 'description'];

    protected static function boot()
    {
        parent::boot();
        self::deleting(function ($raw) {
            if ($raw->photo)
                if (file_exists(public_path('storage/' . $raw->photo)))
                    File::delete(public_path('storage/' . $raw->photo));
        });
    }
}
