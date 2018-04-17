<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cards */

$this->title = 'Редактирование карточки: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Карточки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->title;
?>
<div class="cards-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
