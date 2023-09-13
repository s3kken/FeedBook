<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\BookSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="forms">


    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
<div class="book-searchs">
    <div class="search-title">
        <?= $form->field($model, 'title') ?>
    </div>
    <div class="search-author">
        <?= $form->field($model, 'id_author') ?>
    </div>
    <div class="search-genre">
        <?= $form->field($model, 'id_genre') ?>
    </div>

    <?php // echo $form->field($model, 'reference') ?>

    <?php // echo $form->field($model, 'id_author') ?>

    <div class="form-groupse">
        <?= Html::submitButton('Найти', ['class' => 'btn-ones btn-primary']) ?>
        <?php // Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>

<style> 
    .book-searchs{
        width: 600px;
        background-color: #F5EAFF;
        border-radius: 30px;
        padding: 15px;
        color: #694B8E;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-left: 200px;
    }
    .btn-ones{
        background-color: #694B8E;
        border-radius: 10px;
        padding: 4px 10px 4px 10px;
        border: solid #694B8E 1px;
        font-size: 13pt;
        color: #F5EAFF;
        
    }
    .forms{
        display: flex;
        justify-content: center;
        align-items:center;
        flex-direction: row;
    }
    .form-groupse{
        display: flex;
        justify-content: center;
        align-items:center;
        margin-left: 15px; 
        margin-top: 6px;
    }
    .search-author, .search-genre{
        margin-left: 15px; 
    }
</style>

