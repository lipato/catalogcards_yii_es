<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "cards".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $views
 * @property int $created_at
 * @property int $updated_at
 */
class Cards extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cards}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['views', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['description'], 'string'],
            ['views', 'default', 'value' => 0],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'views' => 'Просмотры',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата редактирования',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'elasticsearch' => [
                'class' => \borales\behaviors\elasticsearch\Behavior::className(),
                'mode' => 'command',
                'elasticIndex' => \common\models\elasticsearch\CardsElastic::index(),
                'elasticType' => \common\models\elasticsearch\CardsElastic::type(),
                'dataMap' => [
                    'id' => 'id',
                    'title' => 'title',
                    'content' => 'description',
                    'views' => 'views',
                    'created_at' => 'created_at',
                    'updated_at' => 'updated_at',
                ]
            ],
        ];
    }
}
