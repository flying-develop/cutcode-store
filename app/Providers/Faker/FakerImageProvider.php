<?php

namespace App\Providers\Faker;

use Faker\Provider\Base;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;

class FakerImageProvider extends Base
{
    public static function testImageToStorage(string $baseFrom, string $publicTo) : string
    {
        $path = null;

        $files = File::allFiles(base_path($baseFrom));
        if ($files) {
            $file = Arr::random($files, 1);
            $path = Storage::disk('public')->putFile($publicTo, $file[0]->getRealPath());
        }

        return $path;

    }
}
