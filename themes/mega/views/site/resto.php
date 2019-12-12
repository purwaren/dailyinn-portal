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

$this->registerJsFile($this->theme->baseUrl.'/js/site-resto.js');
?>

<div class="mg-page-title parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Lounge & Restaurant</h2>
                <p>Panorama Sky Restaurant and Nagari Sky Lounge</p>
            </div>
        </div>
    </div>
</div>
<div class="mg-single-room-price">
    <div class="mg-srp-inner">IDR 220<sup>000</sup><span>Pack</span></div>
</div>
<div class="mg-single-room">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="mg-gallery-container">
                    <ul class="mg-gallery" id="mg-gallery">
                        <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/resto-1.jpg" alt="Panorama Sky Restaurant" class="img-responsive"></li>
                        <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/resto-2.jpg" alt="Panorama Sky Restaurant" class="img-responsive"></li>
                        <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/resto-3.jpg" alt="Panorama Sky Restaurant" class="img-responsive"></li>
                        <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/resto-4.jpg" alt="Panorama Sky Restaurant" class="img-responsive"></li>
                    </ul>
                    <ul class="mg-gallery-thumb" id="mg-gallery-thumb">
                        <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-01.png" alt="Partner Logo"></li>
                        <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-02.png" alt="Partner Logo"></li>
                        <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-05.png" alt="Partner Logo"></li>
                        <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-06.png" alt="Partner Logo"></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 mg-room-fecilities">
                <h2 class="mg-sec-left-title">Panorama Sky Restaurant</h2>
                <div class="row">
                    <div class="col-xs-12">
                        <p>It is a perfect place for meeting point for business or negotiation, dining or just enjoy the elegance atmosphere with beautiful sky view.
                            A good place for you and your family while enjoying delightful food & beverages. Free wi-fi access up to 30 Mbps, you will be always
                        connected with </p>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-7">
                <div class="mg-gallery-container">
                    <ul class="mg-gallery" id="mg-gallery-1">
                        <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/lounge-1.jpg" alt="Nagari Sky Lounge" class="img-responsive"></li>
                        <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/lounge-2.jpg" alt="Nagari Sky Lounge" class="img-responsive"></li>
                        <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/lounge-3.jpg" alt="Nagari Sky Lounge" class="img-responsive"></li>
                        <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/lounge-4.jpg" alt="Nagari Sky Lounge" class="img-responsive"></li>
                    </ul>
                    <ul class="mg-gallery-thumb" id="mg-gallery-1-thumb">
                        <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-01.png" alt="Partner Logo"></li>
                        <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-02.png" alt="Partner Logo"></li>
                        <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-05.png" alt="Partner Logo"></li>
                        <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-06.png" alt="Partner Logo"></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 mg-room-fecilities">
                <h2 class="mg-sec-left-title">Nagari Sky Lounge</h2>
                <div class="row">
                    <div class="col-xs-12">
                        <p>A cozy lounge for relaxing with business clients or with family.
                            Sky   Lounge is a perfect place for hang out or relaxing with friends or colleague.
                            Sky Lounge  have beautiful sky view and spot for selfie</p>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div>
                <h2 class="mg-sec-left-title">Our Menu</h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <figure class="mg-room">
                        <img src="<?= Yii::$app->request->baseUrl?>/upload/food-1.jpg" alt="img11" class="img-responsive">
                        <figcaption>
                            <h2>Banana Snow With Cheese</h2>
                            <div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
                            <div class="mg-room-price"></div>
                            <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                            <a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-4">
                    <figure class="mg-room">
                        <img src="<?= Yii::$app->request->baseUrl?>/upload/food-2.jpg" alt="img11" class="img-responsive">
                        <figcaption>
                            <h2>Spaghetti Marinara</h2>
                            <div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
                            <div class="mg-room-price"></sup></div>
                            <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                            <a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-4">
                    <figure class="mg-room">
                        <img src="<?= Yii::$app->request->baseUrl?>/upload/food-3.jpg" alt="img11" class="img-responsive">
                        <figcaption>
                            <h2>Sirloin Steak</h2>
                            <div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
                            <div class="mg-room-price"></sup></div>
                            <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                            <a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </div>
</div>