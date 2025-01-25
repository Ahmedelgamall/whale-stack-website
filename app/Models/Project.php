<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Project extends Model
{
    use Translatable;

    protected $with = ['translations'];
    protected $guarded = [];

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
    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }
}
