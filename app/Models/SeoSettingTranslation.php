<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoSettingTranslation extends Model
{
    protected $table = 'seo_setting_translations';
    protected $guarded = [];

    public $timestamps = false;

    /**
     * Set the meta_keyword attribute.
     *
     * @param string $value
     * @return void
     */
    public function setMetaKeywordAttribute($value)
    {
        // Split the input by spaces, filter empty values, and join with commas
        $this->attributes['meta_keyword'] = collect(explode(' ', $value))
            ->filter()
            ->implode(', ');
    }

    /**
     * Get the meta_keyword attribute without commas.
     *
     * @param string $value
     * @return string
     */
    public function getMetaKeywordAttribute($value)
    {
        // Replace commas with spaces
        return str_replace(', ', ' ', $value);
    }
}
