<?php

use app\models\Review;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Отзывы';
?>
<div class="body-review">
<div class="review-index">
<div class="create-title">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать отзыв', ['create'], ['class' => 'btn-one btn-success']) ?>
    </p>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'id',
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
            [
                'class' => ActionColumn::className(),
                'template' => '{view} {delete}',
                'urlCreator' => function ($action, Review $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

</div>
</div>

<style> 
    .btn-one{
        background-color: #694B8E;
        border-radius: 15px;
        padding: 8px 20px 8px 20px;
        border: solid #694B8E 1px;
        font-size: 15pt;
        color: #F5EAFF;
        
    }
    .block-search{
        display: flex;
    }
    .review-index{
        width: 1200px;
    }
    .body-review{
        display: flex;
        justify-content: center;
    }
    th, td{
        color: #694B8E;
    }
    tr{
        /* background-color: #F5EAFF; */
    }
    h1{
        color: #694B8E;
    }
</style>
