<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use app\models\Message;
use yii\helpers\Json;
/**
 * Site controller
 */
class MessageController extends Controller
{

    public function actionList($currentPage, $pagesize)
    {
        $message = new Message();
        $result = $message->getList(($currentPage - 1) * $pagesize, $pagesize);
        return Json::encode($result);
    }
}
