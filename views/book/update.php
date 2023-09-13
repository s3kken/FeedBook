<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Book $model */

$this->title = 'Редактировать книгу:  ' . $model->title;
?>
<div class="book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'models' => $models,
        'mode' => $mode
    ]) ?>

</div>

<style>
    h1{
        color: #694B8E;
        margin: 0 0 50px 0;
    }
    .book-update{
        display:flex;
        flex-direction:column;
        align-items: center;
    }
</style>
