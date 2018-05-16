<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ManagersCallArxive */

$this->title = 'Update Managers Call Arxive: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Managers Call Arxives', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="managers-call-arxive-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
