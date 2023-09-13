<?php
$this->title = 'Личный кабинет';
use yii\helpers\Html;
use yii\helpers\Url;
?>
    <h1>Личный кабинет</h1>
<div class="user-index">

    <div class="block-avatar">
        <img class="avatarka" src="<?= Yii::$app->user->identity->image ?>" alt="avatar">
    </div>
    <div class="personalData">
        <p>ФИО: <?= Yii::$app->user->identity->fio ?></p>
        <p>Ник: <?= Yii::$app->user->identity->login ?></p>
        <p>Email: <?= Yii::$app->user->identity->email ?></p>
        <button><a href="<?= Url::to(['user/update', 'id' => Yii::$app->user->identity->id])?>">Редактировать профиль</a></button>
    </div>
</div>


<style>
    h1{
        color: #694B8E;
        margin: 0 0 50px 0;
    }
    .user-index{
        display:flex;
        flex-direction:row;
        align-items: center;
    }
    .avatarka{
        width: 400px;
        /* height: 400px; */
        border-radius: 20px;
    }
    .block-avatar{
        margin-right: 30px;
    }
    p{
        color: #694B8E;
        font-size: 19pt;
    }
    button{
        background-color: #F5EAFF;
        border-radius: 15px;
        padding: 8px;
        border: solid #694B8E 1px;
    }

</style>