<?php

namespace App\Services;

Use InterventionImage; 
Use Illuminate\Support\Facades\Storage;

class ImageService{
    public static function upload($imageFile, $folderName){
        //dd($imageFile);
        //配列かどうか判定
        if(is_array($imageFile)){
            $file = $imageFile['image']; // 配列なので[ʻkeyʼ] で取得
        }else{
            $file = $imageFile;
        }

        $fileName = uniqid(rand().'_'); //ランダムなファイル名を作成
        $extension = $file->extension(); 
        $fileNameToStore = $fileName. '.' . $extension;
    
        $resizedImage = InterventionImage::make($file)->resize(1920, 1080)->encode();
        Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizedImage); 
        return $fileNameToStore;
    }
}
