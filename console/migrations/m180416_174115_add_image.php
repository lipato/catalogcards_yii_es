<?php

use yii\db\Migration;

/**
 * Class m180416_174115_add_image
 */
class m180416_174115_add_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('cards', 'image', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('cards', 'image');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180416_174115_add_image cannot be reverted.\n";

        return false;
    }
    */
}
