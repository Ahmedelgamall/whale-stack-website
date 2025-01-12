<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory, Translatable;

    protected $with = ['translations'];

    protected $table = 'settings';
    protected $guarded = [];
    protected $translatedAttributes = ['value'];
}
