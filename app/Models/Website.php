<?php

namespace App\Models;

use App\Enums\WebsiteType;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $guarded = [];
    protected $casts = [
        'type'=> WebsiteType::class
    ];
}
