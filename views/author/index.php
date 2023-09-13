<?php

use app\models\Author;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AuthorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Авторы';
?>
<div class="body-author">
<div class="author-index">
<div class="block-search">
        <div class="create-title">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать автора', ['create'], ['class' => 'btn-one btn-success']) ?>
    </p>
    </div>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'fio',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Author $model, $key, $index, $column) {
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
    .author-index{
        width: 1200px;
    }
    .body-author{
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