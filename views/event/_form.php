<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_date')->widget(\janisto\timepicker\TimePicker::className(), [
            //'language' => 'fi',
            'mode' => 'datetime',
            'clientOptions'=>[
                'dateFormat' => 'yy-mm-dd',
                // 'timeFormat' => 'HH:mm:ss',
                // 'showSecond' => true,
            ]
        ]); 
    ?>

    <?= $form->field($model, 'event_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
