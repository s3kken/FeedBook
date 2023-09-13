<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Review $model */


\yii\web\YiiAsset::register($this);
?>
<div class="review-view">

    <h1>Подробнее об отзыве</h1>

    <p>
        <?= Html::a('Удалить отзыв', ['delete', 'id' => $model->id], [
            'class' => 'btn-one-del btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [ 
                'attribute' => 'id_user', 
                'value' => function($user){ 
                    return $user->user->login ?? ''; 
                }, 
            ],
            [ 
                'attribute' => 'id_book', 
                'value' => function($book){ 
                    return $book->book->title ?? ''; 
                }, 
            ],
            'review',
        ],
    ]) ?>

</div>

<style>
    h1{
        color: #694B8E;
    }
    th, td{
        color: #694B8E;
    }
    tr{
        background-color: #F5EAFF;
    }
    .btn-one-del{
        background-color: #F75555;
        border-radius: 15px;
        padding: 8px 20px 8px 20px;
        border: solid #F75555 1px;
        font-size: 15pt;
        color: white;
        
    }
</style>