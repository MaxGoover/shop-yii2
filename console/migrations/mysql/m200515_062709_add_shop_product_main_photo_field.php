<?php

use yii\db\Migration;

/**
 * Class m200515_062709_add_shop_product_main_photo_field
 */
class m200515_062709_add_shop_product_main_photo_field extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%shop_products}}', 'main_photo_id', $this->integer());

        $this->createIndex('{{%idx-shop_products-main_photo_id}}', '{{%shop_products}}', 'main_photo_id');

        $this->addForeignKey('{{%fk-shop_products-main_photo_id}}', '{{%shop_products}}', 'main_photo_id', '{{%shop_photos}}', 'id', 'SET NULL', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropForeignKey('{{%fk-shop_products-main_photo_id}}', '{{%shop_products}}');

        $this->dropColumn('{{%shop_products}}', 'main_photo_id');
    }
}
