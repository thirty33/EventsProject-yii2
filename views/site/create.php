<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CreateEvent */

$this->title = 'Asignar usuario a evento';
$this->params['breadcrumbs'][] = ['label' => 'Asignar usuario', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-create"> 

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
</div>