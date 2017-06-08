<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\medqueue\models\Medqueue */

$this->title = 'Create Medqueue';
$this->params['breadcrumbs'][] = ['label' => 'Medqueues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medqueue-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
