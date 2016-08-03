<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header"></header>
<nav>
    <ul>
        <li>首页</li>
        <li>会议介绍</li>
        <li>论文展示</li>
        <li>联系我们</li>
    </ul>
</nav>
<div class="wrap">


    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
</footer>

<?php $this->endBody() ?>
    <script src="/vendor/bower/requirejs/require.js"></script>
    <script src="/js/main.js?v=<?= Yii::$app->params['buildVersion'] ?>"></script>
</body>
</html>
<?php $this->endPage() ?>
