<?php

namespace app\controllers;

use app\models\CommentForm;
use yii\web\Controller;
use app\models\News;

class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new CommentForm;
        $news = News::find()->all();

        if($model->load(\Yii::$app->request->post())){
            $model->saveComment();
            $this->refresh();
        }

        return $this->render('index',[
            'news' => $news,
            'model' => $model
        ]);
    }

    /**
     * Displays detail page for news.
     * @param string id
     * @return string
     */
    public function actionNews($id)
    {
        $article = News::findOne(intval($id));
        $comments = $article->getComments()->all();

        return $this->render('news',[
            'article' => $article,
            'comments' => $comments
        ]);
    }
}
