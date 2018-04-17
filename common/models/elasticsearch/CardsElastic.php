<?php

namespace common\models\elasticsearch;

use Yii;

/**
 * This is the model class for Elasticsearch type "cards".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $views
 * @property int $created_at
 * @property int $updated_at
 */
class CardsElastic extends \yii\elasticsearch\ActiveRecord
{
    /**
     * Название индекса
     * @return string
     */
    public static function index()
    {
        return Yii::$app->params['elasticsearch.index'];
    }

    /**
     * Название типа
     * @return string
     */
    public static function type()
    {
        return 'cards';
    }

    /**
     * @return array the list of attributes for this record
     */
    public function attributes()
    {
        // path mapping for '_id' is setup to field 'id'
        return ['id', 'title', 'description', 'views', 'created_at', 'updated_at'];
    }
}