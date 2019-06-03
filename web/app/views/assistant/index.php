<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchAssistant */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Assistants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assistant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Assistant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firts_name',
            'tlf_number',
            'last_name',
            'event_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
