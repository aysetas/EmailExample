<?php


namespace App\Helpers;


use phpDocumentor\Reflection\Types\Self_;

class UploadPaths
{
     public static $uploadPaths=array(
         'product_photos'=>'/uploads/product_images'
     );
     //TODO: burasını gözden geçir..
    public static function getUploadPath($path){
        return public_path().self::$uploadPaths[$path];
    }
}
