<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Genre $model */

$this->title = 'Редактировать жанр: ' . $model->genre;
?>
<div class="genre-update">

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
    .genre-update{
        display:flex;
        flex-direction:column;
        align-items: center;
    }
</style>
