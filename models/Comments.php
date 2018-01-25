<?php

namespace app\models;

use yii\db\ActiveRecord;

class Comments extends ActiveRecord{

    public function getArticle(){
        $this->hasOne(News::className(),['id' => 'news_id']);
    }
}