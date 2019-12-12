<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TmstUsers */

$this->title = 'Create Tmst Users';
$this->params['breadcrumbs'][] = ['label' => 'Tmst Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmst-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
