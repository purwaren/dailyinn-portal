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

$this->title = 'Meeting Rooms';

?>

<div class="mg-page-title parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Event & Meeting</h2>
                <p>Daily Inn Hotel Provides 3 Meeting Rooms and 1 Ballroom that are available for multi-purpose functions and can accommodate from 15 to 400 people</p>
            </div>
        </div>
    </div>
</div>
<div class="mg-page mg-available-rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mg-avl-room">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="mg-gallery-container">
                                <ul class="mg-gallery" id="mg-gallery">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/meeting-1.jpg" alt="Meeting Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/meeting-2.jpg" alt="Meeting Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/meeting-3.jpg" alt="Meeting Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-1.jpg" alt="Ballroom" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-2.jpg" alt="Ballroom" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-3.jpg" alt="Ballroom" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-4.jpg" alt="Ballroom" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/ballroom-5.jpg" alt="Ballroom" class="img-responsive"></li>
                                </ul>
                                <ul class="mg-gallery-thumb" id="mg-gallery-thumb">
                                    <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-01.png" alt="Partner Logo"></li>
                                    <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-02.png" alt="Partner Logo"></li>
                                    <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-02.png" alt="Partner Logo"></li>
                                    <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-04.png" alt="Partner Logo"></li>
                                    <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-05.png" alt="Partner Logo"></li>
                                    <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-01.png" alt="Partner Logo"></li>
                                    <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-02.png" alt="Partner Logo"></li>
                                    <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-02.png" alt="Partner Logo"></li>
                                    <li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-04.png" alt="Partner Logo"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <h3 class="mg-avl-room-title"><a href="#">EXCLUSIVE MEETING PACKAGES</a></h3>
                            <p></p>
                            <div class="row mg-room-fecilities">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><i class="fp-ht-hotel"></i> Full Board Meeting (One night accommodation, Breakfast, Lunch, Dinner, 2 x Coffee Breaks)</li>
                                        <li><i class="fp-ht-hotel"></i> Full Day Meeting (Lunch, Dinner, 2 x Coffee Breaks)</li>
                                        <li><i class="fp-ht-hotel"></i> One Day Meeting (Lunch or Dinner, 2 x Coffee Breaks)</li>
                                        <li><i class="fp-ht-hotel"></i> Half Day Meeting (Lunch or Buffet, 1 x Coffee Break)</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn btn-dark ">View Details <i class="fa fa-angle-double-right"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mg-single-room-txt">
                    <h2 class="mg-sec-left-title">Description</h2>
                    <p>Daily Inn Hotel Provides 3 Meeting Rooms and 1 Ballroom that are available for multi-purpose functions and can accommodate from 15 to 400 people. Our meeting facilities are fully equipped with modern audio-visual technologies, full size projector screens, and wireless microphones plus a set of standard meeting amenities. </p>
                    <p>All meeting rooms are fully equipped with full size projector screens, white board and markers, flip charts, microphones with sound system, notepads and pens, podium, registration desks, mineral water, refreshment candies, meeting room attendants, high speed internet access/WIFI.</p>
                </div>
            </div>
        </div>
    </div>
</div>