<?php

namespace App\Services;

use App\Contract\File;
use Illuminate\Http\UploadedFile;

class UploadService implements File
{
    public function upload(UploadedFile $file, $path = 'news'): string
    {
        $originalExtension = $file->getClientOriginalExtension();
        $fileName = uniqid('u_') . '.' . $originalExtension;

        if ($filePath = $file->storeAs($path, $fileName, 'public')) {
            return $filePath;
        }

        throw new \Exception('Фаил не загружен');
    }
}
