<?php

use yii\db\Migration;

/**
 * Class m241101_172145_test_table
 */
class m241101_172145_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user',[
            "id"=> \yii\db\Schema::TYPE_PK,
            "name"=>\yii\db\Schema::TYPE_STRING,
            "email"=>\yii\db\Schema::TYPE_STRING
        ]);
        $this->batchInsert('user', ['name', 'email'], [
            ['John', 'j@j.com'],
            ['Jane', 'jane@j.com'],
            ['Jack', 'jack@j.com'],
            ['Jill', 'jill@j.com'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241101_172145_test_table cannot be reverted.\n";

        return false;
    }
    */
}
