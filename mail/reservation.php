<?php
/**
 * @var $model \app\models\CreateBookingForm
 */

use yii\helpers\Html;
use yii\helpers\Url;


?>
<h2>Reservation via Website</h2>
<table>
    <tr>
        <td>Check In</td>
        <td><?= $model->checkin ?></td>
    </tr>
    <tr>
        <td>Check Out</td>
        <td><?= $model->checkout ?></td>
    </tr>
    <tr>
        <td>Room</td>
        <td><?= $model->room ?></td>
    </tr>
    <tr>
        <td>Qty</td>
        <td><?= $model->qty ?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?= $model->name ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $model->email ?></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><?= $model->phone ?></td>
    </tr>
</table>
<p>This email was automatically send via web at <?= date('d/m/Y H:i:s')?></p>
