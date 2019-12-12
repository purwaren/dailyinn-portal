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

$this->title = 'Rooms';
$this->registerJsFile($this->theme->baseUrl.'/js/site-room.js');

?>

<div class="mg-page-title parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Rooms</h2>
                <p>We offer 5 type of room which are standard, superior, deluxe, executive and suite. All price already include tax & services (Nett Price)</p>
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
                                <ul class="mg-gallery" id="mg-gallery-0">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/standard-1.jpg" alt="Standard Room" class="img-responsive"></li>
                                </ul>
                                <ul class="mg-gallery-thumb" id="mg-gallery-thumb-0">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-1-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <h3 class="mg-avl-room-title"><a href="#">Standard Room</a> <span>IDR 400 <sup>000</sup>/Night</span></h3>
                            <p>The 15 square meter room with Classic modern design equipped with 32 Inch LCD TV featuring International, Indonesian and Local Programs , Safe Deposit Box, coffee/tea maker,
                                Air Conditioner, Mini Bar, Hot and Cold water, Wi-Fi. Available only single bed (200cm x 120cm)</p>
                            <div class="row mg-room-fecilities">
                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="fp-ht-bed"></i> Single Bed</li>
                                        <li><i class="fp-ht-food"></i> Breakfast</li>
                                        <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                        <li><i class="fa fa-coffee"></i> Coffee / Tea  </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="fp-ht-telephone"></i> Wake Up Call</li>
                                        <li><i class="fp-ht-tv"></i> TV LCD</li>
                                        <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                        <li><i class="fa fa-shopping-cart"></i> Mini Bar  </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn btn-dark ">View Details <i class="fa fa-angle-double-right"></i></a>
                            <a href="#" class="btn btn-main pull-right">Book Now</a>

                        </div>
                    </div>
                </div>
                <div class="mg-avl-room">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="mg-gallery-container">
                                <ul class="mg-gallery" id="mg-gallery-1">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/superior-1.jpg" alt="Superior Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/superior-2.jpg" alt="Superior Room" class="img-responsive"></li>
                                </ul>
                                <ul class="mg-gallery-thumb" id="mg-gallery-thumb-1">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-1-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-2-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <h3 class="mg-avl-room-title"><a href="#">Superior Room</a> <span>IDR 500 <sup>000</sup>/Night</span></h3>
                            <p>The 18 square meter room with Classic modern design equipped with 32 Inch LCD TV featuring International,Indonesian and Local Programs ,
                                Safe Deposit Box, coffee/tea  maker, Air Conditioner, Mini Bar, Hot and Cold water,  Wi-Fi. Available Twin bed (200cm x 100cm) and double/queen size bed (200cm x 180cm)
                            </p>
                            <div class="row mg-room-fecilities">
                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="fp-ht-bed"></i> Double / Queen Size Bed</li>
                                        <li><i class="fp-ht-food"></i> Breakfast</li>
                                        <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                        <li><i class="fa fa-coffee"></i> Coffee / Tea  </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="fp-ht-telephone"></i> Wake Up Call</li>
                                        <li><i class="fp-ht-tv"></i> TV LCD</li>
                                        <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                        <li><i class="fa fa-shield"></i>Safe Deposit</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn btn-dark ">View Details <i class="fa fa-angle-double-right"></i></a>
                            <a href="#" class="btn btn-main pull-right">Book Now</a>

                        </div>
                    </div>
                </div>
                <div class="mg-avl-room">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="mg-gallery-container">
                                <ul class="mg-gallery" id="mg-gallery-2">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/deluxe-1.jpg" alt="Deluxe Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/deluxe-2.jpg" alt="Deluxe Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/deluxe-3.jpg" alt="Deluxe Room" class="img-responsive"></li>
                                </ul>
                                <ul class="mg-gallery-thumb" id="mg-gallery-thumb-2">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-1-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-2-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-3-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <h3 class="mg-avl-room-title"><a href="#">Deluxe Room</a> <span>IDR 600 <sup>000</sup>/Night</span></h3>
                            <p>The 20 square meter room with Classic modern design equipped with 32 Inch LCD TV featuring International,
                                Indonesian and Local Programs , Safe Deposit Box, coffee/tea  maker, Air Conditioner, Mini Bar, Hot and Cold water,
                                Wi-Fi.  Available Twin bed (200cm x 100cm) and double/queen size bed (200cm x 180cm).
                            </p>
                            <div class="row mg-room-fecilities">
                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="fp-ht-bed"></i> Twin / Double / Queen size bed</li>
                                        <li><i class="fp-ht-food"></i> Breakfast</li>
                                        <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                        <li><i class="fa fa-coffee"></i> Coffee / Tea  </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="fp-ht-telephone"></i> Wake Up Call</li>
                                        <li><i class="fp-ht-tv"></i> TV LCD</li>
                                        <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                        <li><i class="fa fa-shield"></i>Safe Deposit</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn btn-dark ">View Details <i class="fa fa-angle-double-right"></i></a>
                            <a href="#" class="btn btn-main pull-right">Book Now</a>

                        </div>
                    </div>
                </div>
                <div class="mg-avl-room">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="mg-gallery-container">
                                <ul class="mg-gallery" id="mg-gallery-3">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-1.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-2.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-3.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-4.jpg" alt="Executive Room" class="img-responsive"></li>
                                </ul>
                                <ul class="mg-gallery-thumb" id="mg-gallery-thumb-3">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-1-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-2-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-3-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-4-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <h3 class="mg-avl-room-title"><a href="#">Executive Room</a> <span>IDR 800 <sup>000</sup>/Night</span></h3>
                            <p>The 27 square meter, Spacious  room with Classic modern design equipped with 32 Inch LCD TV featuring International,
                                Indonesian and Local Programs , Safe Deposit Box, coffee/tea  maker, Air Conditioner, Mini Bar, Hot and Cold water, Wi-Fi,
                                Sofa and coffee table.  Available only double/queen size bed (200cm x 180cm).</p>
                            <div class="row mg-room-fecilities">
                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="fp-ht-bed"></i> Double/Queen size bed </li>
                                        <li><i class="fp-ht-food"></i> Breakfast</li>
                                        <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                        <li><i class="fa fa-coffee"></i> Coffee / Tea  With Sofa & Table</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="fp-ht-telephone"></i> Wake Up Call</li>
                                        <li><i class="fp-ht-tv"></i> TV LCD</li>
                                        <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                        <li><i class="fa fa-shield"></i>Safe Deposit</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn btn-dark ">View Details <i class="fa fa-angle-double-right"></i></a>
                            <a href="#" class="btn btn-main pull-right">Book Now</a>

                        </div>
                    </div>
                </div>
                <div class="mg-avl-room">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="mg-gallery-container">
                                <ul class="mg-gallery" id="mg-gallery-4">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/suite-1.jpg" alt="Superior Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/suite-2.jpg" alt="Superior Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/suite-3.jpg" alt="Superior Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/suite-4.jpg" alt="Superior Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/suite-5.jpg" alt="Superior Room" class="img-responsive"></li>
                                </ul>
                                <ul class="mg-gallery-thumb" id="mg-gallery-thumb-4">
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-1-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-2-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-3-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-4-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                    <li><img src="<?= Yii::$app->request->baseUrl ?>/upload/executive-4-thumb.jpg" alt="Executive Room" class="img-responsive"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <h3 class="mg-avl-room-title"><a href="#">Suite Room</a> <span>IDR 1,000 <sup>000</sup>/Night</span></h3>
                            <p>The 33 square meter room with Classic modern design equipped with 40 Inch LCD 2 units  TV featuring International,
                                Indonesian and Local Programs , Safe Deposit Box, coffee/tea  maker, Air Conditioner, Mini Bar, Hot and Cold water,
                                Hair Dryer, Wi-Fi, Living Room, Sofa and coffee table Available only double/King size bed (200cm x 200cm).
                            </p>
                            <div class="row mg-room-fecilities">
                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="fp-ht-bed"></i> Double / King Size bed</li>
                                        <li><i class="fp-ht-food"></i> Breakfast</li>
                                        <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                        <li><i class="fa fa-coffee"></i> Cofee / Tea</li>
                                        <li><i class="fa fa-user"></i> Hair Dryer</li>

                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="fp-ht-telephone"></i> Wake Up Call</li>
                                        <li><i class="fp-ht-tv"></i> 40" TV LCD</li>
                                        <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                        <li><i class="fa fa-home"></i> Living Room</li>
                                        <li><i class="fa fa-shield"></i> Safe Deposit Box</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn btn-dark ">View Details <i class="fa fa-angle-double-right"></i></a>
                            <a href="#" class="btn btn-main pull-right">Book Now</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>