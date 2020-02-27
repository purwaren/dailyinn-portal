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
                <h2>Moz5 Salon Muslimah</h2>
                <p>Halal Beauty Center</p>
            </div>
        </div>
    </div>
</div>
<div class="mg-single-room-price">
    <div class="mg-srp-inner">Special Price</div>
</div>
<div class="mg-single-room">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mg-gallery-container">
                    <ul class="mg-gallery" id="mg-gallery">
                        <li><img src="<?= $this->theme->baseUrl ?>/images/moz-1.jpeg" class="img-responsive" alt="Moz5 Salon Musilmah"></li>
                        <li><img src="<?= $this->theme->baseUrl ?>/images/moz-2.jpeg" class="img-responsive" alt="Moz5 Salon Musilmah"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>