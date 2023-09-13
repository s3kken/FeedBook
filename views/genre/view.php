<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Genre $model */

$this->title = $model->genre;
\yii\web\YiiAsset::register($this);
?>
<div class="body-genre">
<div class="genre-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn-one btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'id',
            'genre',
        ],
    ]) ?>

</div>
</div>

<style>
    .genre-view{
        width: 1200px;
    }
    .body-genre{
        display: flex;
        justify-content: center;
    }
    h1{
        color: #694B8E;
    }
    th, td{
        color: #694B8E;
    }
    tr{
        background-color: #F5EAFF;
    }
    .btn-one{
        background-color: #694B8E;
        border-radius: 15px;
        padding: 8px 20px 8px 20px;
        border: solid #694B8E 1px;
        font-size: 15pt;
        color: #F5EAFF;
        
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
