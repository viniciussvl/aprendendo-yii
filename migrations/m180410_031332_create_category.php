<?php

use yii\db\Migration;

/**
 * Class m180410_031332_create_category
 */
class m180410_031332_create_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id_category' => $this->primaryKey(),
            'name' => $this->string(60)->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime(),
            'created_by' => $this->integer()->defaultValue(1)
        ], 'ENGINE=InnoDB');

        $this->insert('category', [
            'name' => 'Categoria 1',
            'created_at' => date('Y-m-d')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180410_031332_create_category cannot be reverted.\n";

        return false;
    }
    */
}
