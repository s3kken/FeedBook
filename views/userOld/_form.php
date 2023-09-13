<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="form">
<div class="user-forma">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file', ['enableAjaxValidation' => false])->fileInput() ?>

    <div class="form-groups">
        <?= Html::submitButton('Сохранить', ['class' => 'btn-one btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>

<style> 
    .user-forma{
        width: 600px;
        background-color: #F5EAFF;
        border-radius: 30px;
        padding: 15px;
        color: #694B8E;
    }
    .form{
        display: flex;
        justify-content: center;
        align-items:center;
    }
    .form-groups{
        display: flex;
        justify-content: center;
        align-items:center;
    }
    .btn-one{
        background-color: #694B8E;
        border-radius: 15px;
        padding: 8px 20px 8px 20px;
        border: solid #694B8E 1px;
        font-size: 15pt;
        color: #F5EAFF;
        
    }
    #file{
        background-color: #694B8E;
        border-radius: 15px;
        padding: 8px 20px 8px 20px;
        border: solid #694B8E 1px;
        font-size: 15pt;
        color: #F5EAFF; 
    }

</style>
