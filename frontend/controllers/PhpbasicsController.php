<?php

namespace frontend\controllers;

use frontend\models\Cars;

class PhpbasicsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCars()
    {
        $carsList = Cars::find() -> all();
        //var_dump($carsList);
        return $this->render('cars',[
            'carsList' => $carsList]);
    }

}