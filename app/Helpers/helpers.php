<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;



if(!function_exists('uploadImage')){
    function uploadImage($file_image,$request_image_name,$file_path){
    if ($file_image->file($request_image_name)) {
            if(!Storage::exists($file_path)){
                Storage::makeDirectory($file_path, 0777, true, true);
            }
            $file = $file_image[$request_image_name];
            $extension = $file->getClientOriginalExtension();
            $file_name = currentDatetimString(). '.' . $extension;
            $path = storage_path($file_path);
            $file->move($path, $file_name);
            return $file_name;
        }
    }
}
if(!function_exists('imageDeleteFromDirectory')){
    function imageDeleteFromDirectory($file_name,$file_path){
        if(!is_null($file_name)){
            $file_path = public_path($file_path . DIRECTORY_SEPARATOR . $file_name);
            if (is_file($file_path)) {
                unlink($file_path);
            }
        }
    }   
}


if(!function_exists('currentDatetimString')){
    function currentDatetimString(){
        $now = new DateTime('now');
        return $now->getTimestamp();
    }
}