<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CreateEvent */

$this->title = 'Update Create Event: ' . $model->event_id;
$this->params['breadcrumbs'][] = ['label' => 'Create Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->event_id, 'url' => ['view', 'event_id' => $model->event_id, 'assistant_id' => $model->assistant_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="create-event-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
