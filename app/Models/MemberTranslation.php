<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberTranslation extends Model
{
    protected $table = 'member_translations';
    public $timestamps = false;
    protected $guarded = [];
}
