<?php

use yii\db\Migration;

/**
* Handles the creation of table `{{%category}}`.
*/
class m201221_093608_create_author_table extends Migration
{
   /**
    * {@inheritdoc}
    */
   public function safeUp()
   {
       $this->createTable('{{%author}}', [
           'id' => $this->primaryKey(),
           'name' => $this->string(100)->notNull()->comment('Имя'),

       ]);
   }

   /**
    * {@inheritdoc}
    */
   public function safeDown()
   {
       $this->dropTable('{{%author}}');
   }
}
