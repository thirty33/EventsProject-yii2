<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CreateEvent */
/* @var $form yii\widgets\ActiveForm */

use app\models\Assistant;
use app\models\Tipo;
use app\models\Event;
use yii\helpers\ArrayHelper;
?>

<div class="site-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_id')
			->dropDownList(
					ArrayHelper::map(Event::find()->asArray()->all(), 'id', 'event_name')
				)
    ?>

		<?= $form->field($model, 'assistant_id')
			->dropDownList(
				ArrayHelper::map(Assistant::find()->asArray()->all(), 'id', 'firts_name')
			) ?>

		<?= $form->field($model, 'type_event')
			->dropDownList(
				ArrayHelper::map(Tipo::find()->asArray()->all(), 'id', 'type_name')
			) 
		?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>