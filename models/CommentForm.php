<?php

namespace app\models;

use yii\base\Model;

class CommentForm extends Model{
    public $news_id;
    public $name;
    public $comment;

    public function attributeLabels()
    {
          return [
                'name' => 'Введите Имя',
                'comment' => 'Оставить Комментарий'
          ];
    }

    public function rules(){
        return [
            [['name','comment','news_id'],'required']
        ];
    }

    public function saveComment(){
        $comments = new Comments;
        $comments->name = $this->name;
        $comments->text = $this->comment;
        $comments->news_id = $this->news_id;
        return $comments->save();
    }
}