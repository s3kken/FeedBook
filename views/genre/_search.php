<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\GenreSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="forms">


    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
<div class="genre-searchs">
    <?php // $form->field($model, 'id') ?>
    <div class="search-genre">
    <?= $form->field($model, 'genre') ?>
    </div>
    <div class="form-groupse">
        <?= Html::submitButton('Найти', ['class' => 'btn-ones btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>

<style> 
    .genre-searchs{
        width: 300px;
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
    .search-genre{
        margin-left: 15px; 
    }
</style>