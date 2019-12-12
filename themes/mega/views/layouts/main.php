<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name).' :: '.Html::encode($this->title) ?></title>
	<?php $this->head() ?>
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- Bootstrap -->
	<link href="<?= $this->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= $this->theme->baseUrl ?>/css/font-awesome.min.css" rel="stylesheet">
	
	<link href="<?= $this->theme->baseUrl ?>/css/owl.carousel.css" rel="stylesheet">
	<link href="<?= $this->theme->baseUrl ?>/css/owl.theme.css" rel="stylesheet">
	<link href="<?= $this->theme->baseUrl ?>/css/owl.transitions.css" rel="stylesheet">
	<link href="<?= $this->theme->baseUrl ?>/css/cs-select.css" rel="stylesheet">
	<link href="<?= $this->theme->baseUrl ?>/css/bootstrap-datepicker3.min.css" rel="stylesheet">
	<link href="<?= $this->theme->baseUrl ?>/css/freepik.hotels.css" rel="stylesheet">
	<link href="<?= $this->theme->baseUrl ?>/css/style.css" rel="stylesheet">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="<?= $this->theme->baseUrl ?>/js/html5shiv.min.js"></script>
	<script src="<?= $this->theme->baseUrl ?>/js/respond.min.js"></script>
	<![endif]-->
	<script src="<?= $this->theme->baseUrl ?>/js/modernizr.custom.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>
<div class="preloader"></div>

<?= $this->render('//layouts/header') ?>
<?= $content ?>
<?= $this->render('//layouts/footer') ?>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= $this->theme->baseUrl ?>/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= $this->theme->baseUrl ?>/js/bootstrap.min.js"></script>
<script src="<?= $this->theme->baseUrl ?>/js/owl.carousel.min.js"></script>
<script src="<?= $this->theme->baseUrl ?>/js/jssor.slider.mini.js"></script>
<script src="<?= $this->theme->baseUrl ?>/js/classie.js"></script>
<script src="<?= $this->theme->baseUrl ?>/js/selectFx.js"></script>
<script src="<?= $this->theme->baseUrl ?>/js/bootstrap-datepicker.min.js"></script>
<script src="<?= $this->theme->baseUrl ?>/js/starrr.min.js"></script>
<script src="<?= $this->theme->baseUrl ?>/js/nivo-lightbox.min.js"></script>
<script src="<?= $this->theme->baseUrl ?>/js/jquery.shuffle.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="<?= $this->theme->baseUrl ?>/js/gmaps.min.js"></script>
<script src="<?= $this->theme->baseUrl ?>/js/jquery.parallax-1.1.3.js"></script>
<script src="<?= $this->theme->baseUrl ?>/js/script.js"></script>
<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>