<?php


namespace app\controllers;

use Yii;

class PostController extends AppController
{
    public function actionTest(){

        $names = ['ivanov','petrov', 'sidorov'];
//        $this->debug(Yii::$app);

        return $this->render('test');
    }


}