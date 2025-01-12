<?php

namespace App\Models;

use App\Enums\PageType;
use App\Enums\SectionType;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class StaticText extends Model
{
    use Translatable;

    protected $with = ['translations'];
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'page_id' => PageType::class,
        'section' => SectionType::class,
    ];

    protected $translatedAttributes = ['title', 'description'];

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
