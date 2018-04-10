<?php

use yii\db\Migration;

/**
 * Class m180410_031342_create_product
 */
class m180410_031342_create_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id_product' => $this->primaryKey(),
            'id_category' => $this->integer()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'name' => $this->string(60),
            'description' => $this->text(),
            'status' => $this->smallInteger(1),
            'value' => $this->decimal(10, 2)->notNull()->defaultValue(1),
        ], 'ENGINE=InnoDB');

        $this->addForeignKey('fk_product_category', 'product', 'id_category', 'category', 'id_category', 'CASCADE', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_product_category', 'product');
        $this->dropTable('product');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180410_031312_create_product cannot be reverted.\n";

        return false;
    }
    */
}
