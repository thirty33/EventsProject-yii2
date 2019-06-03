<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CreateEvent */

$this->title = $model->event_id;
$this->params['breadcrumbs'][] = ['label' => 'Create Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="create-event-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'event_id' => $model->event_id, 'assistant_id' => $model->assistant_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'event_id' => $model->event_id, 'assistant_id' => $model->assistant_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'event_id',
            'assistant_id',
            'type_event',
        ],
    ]) ?>

</div>
