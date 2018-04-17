<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cards */

$this->title = 'Добавление карточки';
$this->params['breadcrumbs'][] = ['label' => 'Карточки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cards-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
