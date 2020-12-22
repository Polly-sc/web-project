<?php

use yii\db\Migration;

/**
* Handles the creation of table `{{%category}}`.
*/
class m201221_093706_create_date_table extends Migration
{
   /**
    * {@inheritdoc}
    */
   public function safeUp()
   {
       $this->createTable('{{%date}}', [
           'id' => $this->primaryKey(),
           'name' => $this->string(14)->notNull()->comment('Дата'),

       ]);
   }

   /**
    * {@inheritdoc}
    */
   public function safeDown()
   {
       $this->dropTable('{{%date}}');
   }
}
