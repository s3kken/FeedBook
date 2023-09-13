<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Book $model */

$this->title = 'Добавить книгу';
?>
<div class="book-create">

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
    .book-create{
        display:flex;
        flex-direction:column;
        align-items: center;
    }
</style>