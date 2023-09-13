<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var ActiveForm $form */
?>

<div class="form">
    
<div class="register-forma">

<h1>Регистрация</h1>

    <?php $form = ActiveForm::begin([
       'id' => 'register-form',
       'enableAjaxValidation' => true
   
]); ?>

        <?= $form->field($model, 'fio') ?>
        <?= $form->field($model, 'login') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'repeat_password')->passwordInput() ?>
        <?= $form->field($model, 'file', ['enableAjaxValidation' => false])->fileInput()
   ?>

    
        <div class="form-groups">
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn-one btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
</div><!-- register -->

<style> 
    .register-forma{
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
    h1{
        text-align: center;
    }

</style>
