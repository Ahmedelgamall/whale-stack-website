<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqTranslation extends Model
{
  protected $table = 'faq_translations';
  public $timestamps = false;
  protected $guarded = [];
}
