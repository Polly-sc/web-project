<?php

use yii\db\Migration;

/**
* Handles the creation of table `{{%product}}`.
*/
class m201221_093250_create_post_table extends Migration
{
   /**
    * {@inheritdoc}
    */
   public function safeUp()
   {
       $this->createTable('{{%post}}', [
           'id' => $this->primaryKey()->notNull(),
           'name' => $this->string(250)->notNull()->comment('Название'),
           'img' => $this->string()->notNull()->comment('Ссылка на изображение'),
           'description' => $this->text()->notNull()->comment('Описание'),
           'descriptionShort' => $this->text()->notNull()->comment('Краткое описание'),
           'idDate' => $this->integer()->notNull()->comment('Дата поста'),
           'idAuthor' => $this->integer()->notNull()->comment('Имя автора'),
       ]);

       $this->addForeignKey('fk-post-idDate', '{{%post}}', 'idDate', '{{%date}}', 'id', 'NO ACTION', 'NO ACTION');
       $this->addForeignKey('fk-post-idAuthor', '{{%post}}', 'idAuthor', '{{%author}}', 'id', 'NO ACTION', 'NO ACTION');
   }

   /**
    * {@inheritdoc}
    */
   public function safeDown()
   {
       $this->dropForeignKey('fk-post-idDate', '{{%post}}');
       $this->dropForeignKey('fk-post-idAuthor', '{{%post}}');
       $this->dropTable('{{%post}}');
   }
}
