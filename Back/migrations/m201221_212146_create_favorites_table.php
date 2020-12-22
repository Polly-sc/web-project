<?php

use yii\db\Migration;

/**
* Handles the creation of table `{{%order}}`.
*/
class m201221_212146_create_favorites_table extends Migration
{
   /**
    * {@inheritdoc}
    */
   public function safeUp()
   {
       $this->createTable('{{%favorites}}', [
           'id' => $this->primaryKey(),
           'idPost' => $this->integer()->notNull()->comment('Пост'),
           'idUser' => $this->integer()->notNull()->comment('Пользователь'),
           'name' => $this->string(250)->comment('Название'),
       ]);

       $this->addForeignKey('fk-favorites-idPost', '{{%favorites}}', 'idPost', '{{%post}}', 'id', 'NO ACTION', 'NO ACTION');
       $this->addForeignKey('fk-favorites-idUser', '{{%favorites}}', 'idUser', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
   }

   /**
    * {@inheritdoc}
    */
   public function safeDown()
   {
       $this->dropForeignKey('fk-favorites-idPost', '{{%favorites}}');
       $this->dropForeignKey('fk-favorites-idUser', '{{%favorites}}');
       $this->dropTable('{{%favorites}}');
   }
}
