<?php

namespace frontend\controllers;

use common\models\Cards;
use yii\web\NotFoundHttpException;

class CardsController extends \yii\web\Controller
{
    /**
     * Просмотр карточки
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $card = $this->findModel($id);
        $this->updateViews($card);
        return $this->render('view', ['card' => $card]);
    }

    /**
     * Обновление счетчика просмотров
     * @param $card \common\models\Cards
     */
    private function updateViews($card)
    {
        $card->views++;
        $card->update();
    }

    /**
     * Finds the Cards model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cards the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cards::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
