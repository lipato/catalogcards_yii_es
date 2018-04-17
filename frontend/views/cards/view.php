<?php
/* @var $this yii\web\View */
/* @var $post common\models\Cards */
use yii\helpers\Html;
use yii\helpers\Url;


$this->title = $card->title;
$this->params['breadcrumbs'][] = $card->title;
?>
<h1><?= $card->title ?></h1>

<p>
    <?= $card->description ?>
</p>

<p>
    <?= Html::tag('p','<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;'
        . $card->views); ?>
</p>

<p>
<?php echo Html::img(Yii::$app->urlManager->createUrl('/uploads/img\/').$card->image, ['class'=>'img-responsive', 'alt'=>'100%x200','style'=>'height: 200px; display: block']); ?>
</p>

