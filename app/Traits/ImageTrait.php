<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ImageTrait{

    public function imagePath($files,$path)
    {
        return $files->store($path, 'admin');
        // return $path.$files->getClientOriginalName();
    }
}