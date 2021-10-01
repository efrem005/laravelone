<?php

namespace App\Contract;

use Illuminate\Http\UploadedFile;

interface File
{
    public function upload(UploadedFile $file): string;
}
