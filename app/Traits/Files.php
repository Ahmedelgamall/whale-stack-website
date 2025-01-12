<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
trait Files
{
    function upload($file, $dir, $dir_exists = null)
    {

        $file_name =$dir.'/'. time().'_'.random_int(1,100000).'.'.$file->getClientOriginalExtension();


        if (!file_exists(storage_path('app/public/',$dir))){
            mkdir(storage_path('app/public/',$dir));
        }



        if ($dir_exists!=null) {
            File::delete(public_path('storage/'.$dir_exists));
        }
        $file->move(storage_path('app/public/'.$dir),$file_name);

        //$file->storeAs('/', $file_name);

        return $file_name;
    }
}
