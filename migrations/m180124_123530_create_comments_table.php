<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m180124_123530_create_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'text' => $this->text(),
            'news_id' => $this->integer()->notNull()
        ]);

        $this->addForeignKey(
            'news_fk',
            'comments',
            'news_id',
            'news',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('news_fk','comments');
        $this->dropTable('comments');
    }
}
