<?php

use yii\db\Migration;
use yii\elasticsearch\ActiveRecord;

/**
 * Class m180416_204950_add_active_search_index
 */
class m180416_191145_add_active_search_index extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $mapping = ['cards' => [
            'properties' => [
                'id'            => ['type' => 'long'],
                'title'         => ['type' => 'string'],
                'description'   => ['type' => 'string'],
                'views'         => ['type' => 'long'],
                'created_at'    => ['type' => 'date'],
                'updated_at'    => ['type' => 'date'],
                'image'         => ['type' => 'string'],
                ]
        ]];

        $db = ActiveRecord::getDb();
        $command = $db->createCommand();
        $res = $command->createIndex('cards',
            ['mappings' => $mapping]
        );
        return $res;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $db = ActiveRecord::getDb();
        $command = $db->createCommand();
        $command->deleteIndex('cards', 'cards');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180416_204950_add_active_search_index cannot be reverted.\n";

        return false;
    }
    */
}
