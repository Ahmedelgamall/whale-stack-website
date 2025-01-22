<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable, HasFactory;

    protected $with = ['translations'];
    protected $guarded = [];

    protected $translatedAttributes = ['name'];

}
