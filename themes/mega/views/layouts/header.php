<?php
/* @var $this \yii\web\View */

use yii\helpers\Html;
?>
<header class="header transp sticky"> <!-- available class for header: .sticky .center-content .transp -->
	<nav class="navbar navbar-inverse">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="<?= $this->theme->baseUrl ?>/images/logo.png" alt="logo"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li  class="active"><?= Html::a('Home', ['/'])?></li>
                    <li><?= Html::a('About Us', ['site/static','page'=>'about'])?></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services & Facilities</span></a>
                        <ul class="dropdown-menu">
                            <li><?= Html::a('Rooms', ['site/static', 'page'=>'room'])?></li>
                            <li><?= Html::a('Lounge & Restaurant', ['site/static', 'page'=>'resto'])?></li>
                            <li><?= Html::a('Event &  Meeting', ['site/static', 'page'=>'meeting'])?></li>
                            <li><?= Html::a('Sariayu Beauty Center', ['site/static', 'page'=>'beauty'])?></li>
                            <li><?= Html::a('Moz5 Salon Muslimah', ['site/static', 'page'=>'salon'])?></li>
                        </ul>
					</li>
					<li><?= Html::a('Gallery', ['site/static','page'=>'gallery'])?></li>
					<li><?= Html::a('Contact Us', ['site/contact'])?></li>
				</ul>
			</div><!-- /.navbar-collapse -->
			<div class="mg-search-box-cont pull-right">
				<a href="#" class="mg-search-box-trigger"><i class="fa fa-search"></i></a>
				<div class="mg-search-box">
					<form>
						<input type="text" name="s" class="form-control" placeholder="Type Keyword...">
						<button type="submit" class="btn btn-main"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
</header>