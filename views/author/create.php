<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Author $model */

$this->title = 'Добавить нового автора';
?>
<div class="author-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>


<style>
    h1{
        color: #694B8E;
        margin: 0 0 50px 0;
    }
    .author-create{
        display:flex;
        flex-direction:column;
        align-items: center;
    }
</style>