<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticTextTranslation extends Model
{
    protected $table = 'static_text_translations';
    public $timestamps = false;
    protected $guarded = [];
}
