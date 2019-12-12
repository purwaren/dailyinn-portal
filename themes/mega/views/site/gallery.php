<?php
/**
 * Created by PhpStorm.
 * User: purwa
 * Date: 8/20/17
 * Time: 8:50 AM
 *
 * @var $this \yii\web\View
 */

use yii\helpers\Html;

$this->title = 'Panorama Sky Restaurant';

$this->registerJsFile($this->theme->baseUrl.'/js/nivo-lightbox.min.js');
$this->registerCssFile($this->theme->baseUrl.'/css/nivo-lightbox.css');
$this->registerCssFile($this->theme->baseUrl.'/css/nivo-lightbox-theme.css');

?>

<div class="mg-page-title parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Gallery</h2>
                <p>Gallery of our hotel including room, restaurant, lounge, ballroom, meeting rom, etc</p>
            </div>
        </div>
    </div>
</div>
<div class="mg-gallery-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mg-filter">
                    <form id="mg-filter">
                        <fieldset>
                            <label class="btn btn-dark btn-main"><input type="radio" name="filter" value="all" checked="checked">All</label>
                            <label class="btn btn-dark"><input type="radio" name="filter" value="room">Room</label>
                            <label class="btn btn-dark"><input type="radio" name="filter" value="restaurant">Restaurant</label>
                            <label class="btn btn-dark"><input type="radio" name="filter" value="lounge">Lounge</label>
                            <label class="btn btn-dark"><input type="radio" name="filter" value="ballroom">Ballroom</label>
                        </fieldset>
                    </form>
                </div>

                <div class="row" id="mg-grid">
                    <figure class="col-md-4 mg-gallery-item" data-groups='["room"]'>
                        <a href="<?= Yii::$app->request->baseUrl ?>/upload/executive-3.jpg" data-lightbox-gallery="rooms"><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-3.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
					</figure><figure class="col-md-4 mg-gallery-item" data-groups='["room"]'>	
						<a href="<?= Yii::$app->request->baseUrl ?>/upload/deluxe-2.jpg" data-lightbox-gallery="rooms"><img src="<?= Yii::$app->request->baseUrl ?>/upload/deluxe-2.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure><figure class="col-md-4 mg-gallery-item" data-groups='["room"]'>	
						<a href="<?= Yii::$app->request->baseUrl ?>/upload/suite-2.jpg" data-lightbox-gallery="rooms"><img src="<?= Yii::$app->request->baseUrl ?>/upload/suite-2.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure><figure class="col-md-4 mg-gallery-item" data-groups='["room"]'>	
						<a href="<?= Yii::$app->request->baseUrl ?>/upload/standard-1.jpg" data-lightbox-gallery="rooms"><img src="<?= Yii::$app->request->baseUrl ?>/upload/standard-1.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure><figure class="col-md-4 mg-gallery-item" data-groups='["room"]'>	
						<a href="<?= Yii::$app->request->baseUrl ?>/upload/superior-1.jpg" data-lightbox-gallery="rooms"><img src="<?= Yii::$app->request->baseUrl ?>/upload/superior-1.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure><figure class="col-md-4 mg-gallery-item" data-groups='["room"]'>	
						<a href="<?= Yii::$app->request->baseUrl ?>/upload/suite-4.jpg" data-lightbox-gallery="rooms"><img src="<?= Yii::$app->request->baseUrl ?>/upload/suite-4.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure>					
					<figure class="col-md-4 mg-gallery-item" data-groups='["restaurant"]'>
					 <a href="<?= Yii::$app->request->baseUrl ?>/upload/resto-1.jpg" data-lightbox-gallery="restaurant"><img src="<?= Yii::$app->request->baseUrl ?>/upload/resto-1.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure><figure class="col-md-4 mg-gallery-item" data-groups='["restaurant"]'>
					 <a href="<?= Yii::$app->request->baseUrl ?>/upload/resto-2.jpg" data-lightbox-gallery="restaurant"><img src="<?= Yii::$app->request->baseUrl ?>/upload/resto-2.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure><figure class="col-md-4 mg-gallery-item" data-groups='["restaurant"]'>
					 <a href="<?= Yii::$app->request->baseUrl ?>/upload/resto-4.jpg" data-lightbox-gallery="restaurant"><img src="<?= Yii::$app->request->baseUrl ?>/upload/resto-4.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure>
					<figure class="col-md-4 mg-gallery-item" data-groups='["lounge"]'>
					<a href="<?= Yii::$app->request->baseUrl ?>/upload/lounge-2.jpg" data-lightbox-gallery="lounge"><img src="<?= Yii::$app->request->baseUrl ?>/upload/lounge-2.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure><figure class="col-md-4 mg-gallery-item" data-groups='["lounge"]'>
					<a href="<?= Yii::$app->request->baseUrl ?>/upload/lounge-3.jpg" data-lightbox-gallery="lounge"><img src="<?= Yii::$app->request->baseUrl ?>/upload/lounge-3.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure><figure class="col-md-4 mg-gallery-item" data-groups='["lounge"]'>
					<a href="<?= Yii::$app->request->baseUrl ?>/upload/lounge-4.jpg" data-lightbox-gallery="lounge"><img src="<?= Yii::$app->request->baseUrl ?>/upload/lounge-4.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure>
					<figure class="col-md-4 mg-gallery-item" data-groups='["ballroom"]'>
					<a href="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-1.jpg" data-lightbox-gallery="ballroom"><img src="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-1.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure><figure class="col-md-4 mg-gallery-item" data-groups='["ballroom"]'>
					<a href="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-2.jpg" data-lightbox-gallery="ballroom"><img src="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-2.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure><figure class="col-md-4 mg-gallery-item" data-groups='["ballroom"]'>
					<a href="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-3.jpg" data-lightbox-gallery="ballroom"><img src="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-3.jpg" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                    </figure>					
                </div>
            </div>
        </div>
    </div>
</div>