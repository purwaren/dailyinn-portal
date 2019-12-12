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
                <h2>Sari Ayu Martha Tilaar</h2>
                <p>Halal Beauty Center</p>
            </div>
        </div>
    </div>
</div>
<div class="mg-single-room-price">
    <div class="mg-srp-inner">Disc <br />20<sup>%</sup><span>Threatment</span></div>
</div>
<div class="mg-single-room">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mg-gallery-container">
                    <ul class="mg-gallery" id="mg-gallery">
                        <li><img src="<?= $this->theme->baseUrl ?>/images/sari-ayu.jpeg" alt="Panorama Sky Restaurant"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>