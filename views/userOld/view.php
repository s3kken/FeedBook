<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = $model->id;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1>Подробная информация о пользователе <?= $model->login?></h1>

    <p>
        <?= Html::a('Удалить пользователя', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
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
            'fio',
            'login',
            'email:email',
            // 'password',
            // 'role',
            'image:image',
        ],
    ]) ?>

</div>

<style>
    img{
        width: 150px;
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
</style>