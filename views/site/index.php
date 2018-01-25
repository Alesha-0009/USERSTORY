<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'USERSTORY-TZ';
?>
<div>
    <h1 class="center">Страница Новостей</h1>
    <hr/>
    <?foreach ($news as $item):?>
        <h3 style="margin-top: 40px;" class="center"><?=$item['title']?></h3>
        <div style="margin-left: 300px;margin-top: 20px;">
            Опубликовано <?=date("d.m.Y",strtotime($item['date']))?>
        </div>
        <div style="margin-left: 300px;margin-top: 20px;">
            <img src=<?=$item['icon']?>>
        </div>
        <p style="margin-top: 30px;">
            <?=$item['content']?>
        </p>
        <div style="margin-top: 20px; text-align: center">
            <?php $form = ActiveForm::begin();?>
                <?=$form->field($model,'name')?>
                <?=$form->field($model,'comment')->textarea(['rows' => '5'])?>
                <?=$form->field($model,'news_id')->hiddenInput(['value' => $item['id']])->label(false)?>
                <?=Html::submitButton('Отправить',['class' => 'btn btn-success'])?>
            <?php ActiveForm::end();?>
        </div>
        <a href=<?="/site/news?id=" . $item['id']?>>Перейти к данной новости</a>
        <hr/>
    <?endforeach;?>
</div>
