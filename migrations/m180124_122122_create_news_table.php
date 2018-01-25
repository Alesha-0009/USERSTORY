<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180124_122122_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'title' => $this->string(50),
            'icon' => $this->string(50),
            'content' => $this->text()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
