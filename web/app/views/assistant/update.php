<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Assistant */

$this->title = 'Update Assistant: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Assistants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="assistant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
