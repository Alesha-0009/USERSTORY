<?php
$this->title = 'USERSTORY-TZ';
?>
<h3 class="center"><?=$article['title']?></h3>
<div style="margin-left: 300px;margin-top: 20px;">
    Опубликовано <?=date("d.m.Y",strtotime($article['date']))?>
</div>
<div style="margin-left: 300px;margin-top: 20px;">
    <img src=<?=$article['icon']?>>
</div>
<p style="margin-top: 30px;">
    <?=$article['content']?>
</p>
<h4 class="center" style="margin-top: 20px;">Список Комментариев</h4>
<?foreach ($comments as $comment):?>
<hr/>
<p style="margin-top: 30px;">
    <?=$comment['name']?>:<br/> <?=$comment['text']?>
</p>
<hr/>
<?endforeach;?>



