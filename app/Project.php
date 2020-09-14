<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{

    // Return all images from the given folder.
    // Storage::files() method returns array of files from the storage folder (not public),
    // so we need to replace the 'public' part of the $folder string with 'storage' string.
    public function getImages() {
        $image = [];
        $folder = '/public/'.$this->project_images_folder;
        $files = Storage::files($folder);
        foreach ($files as $file) {
            $image[] = str_replace('public','storage',$file);
        }
        return $image;
    }

    public function countImages() {
        $counter = 0;
        $image = [];
        $folder = '/public/'.$this->project_images_folder;
        $files = Storage::files($folder);
        foreach ($files as $file) {
            $counter++;
        }
        return $counter;
    }

}
