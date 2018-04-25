<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Contact;
class ContactController extends Controller
{
    public function actionIndex()
    {
        $model = new Contact();
        $listAllContact=$model->getAllContact();
        return $this->render('indexContact',['listAllContact' => $listAllContact]);
    }
}