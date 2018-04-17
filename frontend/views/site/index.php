<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $posts common\models\elasticsearch\CardsElastic[] */

$this->title = 'Главная страница';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <?php if ($cards): ?>
                <?php foreach ($cards as $card): ?>
                    <div class = "col-sm-6 col-md-4">
                        <div class = "thumbnail">
                            <a href="<?= Url::to(['cards/view', 'id' => $card->id])?>">
                                <?= Html::img('https://picsum.photos/300/200',
                                    ['alt' => '100%x200', 'style'=> 'height: 200px; width: 100%; display: block;']) ?>
                            </a>
                        <div class="caption">
                            <a href="<?= Url::to(['cards/view', 'id' => $card->id])?>">
                            <?= Html::tag('h3', $card->title) ?>
                            </a>
                            <?= Html::tag('p',$card->description); ?>
                            <?= Html::tag('p','<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;'
                                . $card->views); ?>
                            </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="alert alert-info" role="alert">Карточки отсутствуют.</div>
            <?php endif; ?>
        </div>
    </div>
</div>
