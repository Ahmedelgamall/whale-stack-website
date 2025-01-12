<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\File;
use Laratrust\Traits\LaratrustUserTrait;

class Admin extends Authenticatable
{
    // use LaratrustUserTrait;


    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        self::deleting(function ($raw) {
            if ($raw->photo)
                if (file_exists(public_path('storage/' . $raw->photo)))
                    File::delete(public_path('storage/' . $raw->photo));
        });
    }

    public function scopeWhereDoesntHaveRoles($q, $roles)
    {
        return $q->whereHas('roles', function ($q) use ($roles) {
            $q->whereNotIn('name', $roles);
        });

    }
}
