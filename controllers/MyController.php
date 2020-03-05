<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;



class MyController extends AppController
{
    public function actionIndex($id = null){
        $hi = 'hello world';
        $names = ['ivanov','petrov', 'sidorov'];
        return $this->render('index', compact('hi','names', 'id'));
    }

    public  function actionBlogPost(){
        return 'Blog post';
    }
}