<?php

namespace app\models;

use yii\db\ActiveRecord;

class News extends ActiveRecord{


    public function getComments(){
        return $this->hasMany(Comments::className(),['news_id' => 'id']);
    }

}