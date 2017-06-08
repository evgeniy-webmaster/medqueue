<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\medqueue\models\Medqueue */

$this->title = 'Update Medqueue: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Medqueues', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['update', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medqueue-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>

</div>
