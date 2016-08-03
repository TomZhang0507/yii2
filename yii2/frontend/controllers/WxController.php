<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Index controller
 */
class WxController extends Controller
{

    public function actionIndex()
    {
        $this->layout = 'wxLayout';
        return $this->render('index');
    }
}
