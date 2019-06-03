<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Assistant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assistant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firts_name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'tlf_number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>
