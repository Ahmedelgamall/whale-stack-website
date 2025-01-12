<?php

namespace App\Models;

use App\Enums\PageType;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class SeoSetting extends Model
{
    use Translatable;

    protected $with = ['translations'];
    protected $guarded = [];
    protected $table = 'seo_settings';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'page_id' => PageType::class,
    ];

    protected $translatedAttributes = ['meta_title', 'meta_keyword', 'meta_description'];
}
