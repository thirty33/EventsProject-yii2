<?php

use yii\widgets\ListView;
// use yii\grid\GridView;
use dosamigos\grid\GridView;
use dosamigos\grid\behaviors\GroupColumnsBehavior;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Eventos Asignados</h1>
    </div>

    <div class="body-content">

    <?= GridView::widget([

        'columns' => [
            [
                'class' => '\dosamigos\grid\columns\DataColumn',
                'attribute' => 'evento',
                'value' => 'event.event_name'
            ],
            [
                'class' => '\dosamigos\grid\columns\DataColumn',
                'attribute' => 'decripcion',
                'value' => 'event.event_description'
            ],
            [
                'class' => '\dosamigos\grid\columns\DataColumn',
                'attribute' => 'asistentes',
                'value' => 'assistant.firts_name'
            ],
            [
                'class' => '\dosamigos\grid\columns\DataColumn',
                'attribute' => 'tipo de evento',
                'value' => 'tipo.type_name',
            ]
        ],
        'behaviors' => [
            [
                'class' => 'dosamigos\grid\behaviors\GroupColumnsBehavior', 
                'extraRowColumns' => ['event_id'],
                'extraRowValue' => function($model, $key, $index, $totals) {
                    return '<span class="label label-warning">' . $model['event_id'] . '</span>';
                },
                'mergeColumns' => ['evento', 'tipo de evento', 'decripcion'] 
            ]
        ],
        'dataProvider' => $listDataProvider
    ]); ?>
    </div>
</div>
