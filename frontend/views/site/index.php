<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $posts common\models\elasticsearch\CardsElastic[] */

$this->title = 'Главная страница';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <?php if ($cards): ?>
                <div class="list-group">
                    <?php foreach ($cards as $card): ?>
                        <?= Html::a(
                            $card->title .
                            '<div class="pull-right"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> ' .
                            $card->views .
                            '</div>',
                            ['cards/view', 'id' => $card->id],
                            ['class' => 'list-group-item']
                        ) ?>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info" role="alert">Карточки отсутствуют.</div>
            <?php endif; ?>
        </div>

    </div>
</div>
