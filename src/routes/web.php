<?php

use Illuminate\Support\Facades\Route;
Route::post('ckeditor/upload',function (\Illuminate\Http\Request $request){
    if(config('field.ck_editor_images_uploader',false)){

        $class = config('field.ck_editor_images_uploader');

        return $class::upload($request);
    }else{

        $path = addAttachment($request->image,'ck-editor-images');
        return response()->json(['url' => asset($path)]);
    }
})->name('ckeditor.upload')->middleware((array)config('field.ckeditor5.uploading_middleware'));