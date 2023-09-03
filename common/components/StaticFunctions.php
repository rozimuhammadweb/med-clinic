<?php
namespace common\components;
class StaticFunctions
{
    public static function saveImage($tableName , $id , $image){
        $dir = Yii::$app->params['frontend'] . "uploads/$tableName/$id";

        if (!is_dir($dir)){
            mkdir($dir , 0777 , true);
        }

    }
}