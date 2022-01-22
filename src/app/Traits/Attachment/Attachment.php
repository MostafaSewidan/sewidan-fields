<?php

namespace SewidanField\App\Traits\Attachment;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


trait Attachment
{

    private $imageExtensions = [
        'jpg',
        'jpeg',
        'png',
        'svg',
        'rgb',
    ];

    /**
     * @param $key
     * @param $array
     * @param $value
     * @return mixed
     */
    private static function inArray($key, $array, $value)
    {
        $return = array_key_exists($key, $array) ? $array[$key] : $value;
        return $return;
    }

    /**
     * @param $file
     * @param $folder_name
     * @return string
     */
    public static function addAttachment($file, $folder_name)
    {
        $save = self::inArray('save', $options, 'original');

        ///////////////////////////////

        $destinationPath = public_path().'/uploads/'.$folder_name.'/';
        $extension = $file->getClientOriginalExtension(); // getting image extension

        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, true);
        }

        $image = $save.'-'.time().''.rand(11111, 99999).'.'.$extension;
        $file->move($destinationPath, $image); // uploading file to given
        $path = 'uploads/'.$folder_name.'/'.$image;

        return $path;
    }

    /**
     * @param $file
     * @param $oldFilesPath
     * @param $folder_name
     * @return string
     */
    public static function updateAttachment(
        $file,
        $oldFilesPath,
        $folder_name
    ) {
        self::deleteAttachment($oldFilesPath);
        return self::addAttachment($file, $folder_name);
    }

    /**
     * @param $file_path
     * @return bool
     */
    public static function deleteAttachment($file_path)
    {
        foreach ((array) $file_path as $file) {

            File::delete(public_path().'/'.$file);
        }
        return true;
    }
}
