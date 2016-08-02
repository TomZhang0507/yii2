<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Index controller
 */
class IndexController extends Controller
{

    public function actionIndex()
    {
        $this->layout = 'pageLayout';
        return $this->render('index');
    }
}
