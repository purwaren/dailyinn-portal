<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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

<?= Html::style('.navbar-inverse .navbar-brand { color: #ffffff; }') ?>
<?= Html::style('.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus { background-color: #f4a220; color:#ffffff}') ?>
<?= Html::style('.navbar-inverse .navbar-nav > li > a { color: #ffffff; }') ?>
<?= Html::style('.navbar-inverse { border-color: transparent; }') ?>
    


<?= Html::style('.wrap {  
  background-position: center;
  background-repeat: no-repeat;
  min-height: 20%;
  background-size: 100%;
 
}') ?>

<div class="wrap">
    <?php echo Html::img('@web/site-logo.png') ?>
</div>
<div class="wrapper">
    <?php
    NavBar::begin([
        'brandLabel' => 'Pangkalan Data',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
            'style' => 'background-color:#f47920',
        ],
    ]); 
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Beranda', 'url' => ['/site/index']],
            // ['label' => 'About', 'url' => ['/site/about']],
            // ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Penelitian', 'url' => ['/penelitian/index'], 'visible'=>!Yii::$app->user->isGuest],
            ['label' => 'Bisnis & Kerja Sama', 'url' => ['/mou/index'], 'visible'=>!Yii::$app->user->isGuest],
            ['label' => 'UPM', 'url' => ['/upm/index'], 'visible'=>!Yii::$app->user->isGuest],
            ['label' => 'Pengabmas', 'url' => ['/pengabmas/index'], 'visible'=>!Yii::$app->user->isGuest],
            ['label' => 'Semua Dokumen', 'url' => ['/dokumen/index'], 'visible'=>!Yii::$app->user->isGuest],
            ['label' => 'Logout', 'url'=> ['/site/logout'], 'visible' => !Yii::$app->user->isGuest]
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container main-content">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= date('Y') ?> Poltekkes Kemenkes Jakarta III </p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
