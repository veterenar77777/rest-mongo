<?php
/**
 * Created by PhpStorm.
 * User: plasmo
 * Date: 07.11.2019
 * Time: 20:13
 */

namespace app\models;


use yii\web\HttpException;

class RecordNotFound extends HttpException
{
    public function getName()
    {
        return 'RecordNotFound'; // TODO: Change the autogenerated stub
    }

}