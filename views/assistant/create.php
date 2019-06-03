<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Assistant */

$this->title = 'Create Assistant';
$this->params['breadcrumbs'][] = ['label' => 'Assistants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assistant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
