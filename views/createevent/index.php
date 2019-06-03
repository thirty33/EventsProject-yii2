<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCreateEvent */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Create Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create-event-index">

    
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Create Event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



</div>
