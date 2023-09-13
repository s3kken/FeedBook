<?php

use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Users';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1>Пользователи</h1>
    <div class="user-one"> 
        <?php 
            foreach ($listUsers as $user):  ?>   
                <div class="card-user"> 
                    <p> 
                        <?= $user->login ?> 
                    </p> 
                        <a href="<?= yii\helpers\Url::to(['user/view', 'id' => $user->id])?>" target="_blank">Подробнее</a>
                        <img class="avatar" src="<?= $user->image ?>" alt="#">
                </div> 
        <?php endforeach; ?> 
    </div> 
</div>


<style>
    .user-one{
        display:flex;
        justify-content: space-between;
        /* width: 900px; */
    }
    .user-index{
        display:flex;
        flex-direction:column;
        align-items: center;
    }
    h1{
        color: #694B8E;
        margin: 0 0 50px 0;
    }
    p{
        color: #694B8E;
        font-size: 19pt;
    }
    .card-user{
        width: 250px;
        height: 250px;
        display:flex;
        align-items: center;
        justify-content: center;
        flex-direction:column;
        background-color: #E2CDF5;
        border: solid #694B8E 1px;
        
    }
    .avatar{
     width: 100px;
     height: 100px;
    }
</style>
