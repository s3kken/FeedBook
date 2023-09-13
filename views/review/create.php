<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Review $model */

$this->title = 'Добавить отзыв';

?>
<div class="review-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'models' => $models,
    ]) ?>

</div>

<style>
    h1{
        color: #694B8E;
        margin: 0 0 50px 0;
    }
    .review-create{
        display:flex;
        flex-direction:column;
        align-items: center;
    }
</style>