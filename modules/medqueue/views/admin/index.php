<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\medqueue\models\MedqueueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medqueues';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medqueue-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Medqueue', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'firstname',
            'lastname',
            'phone',
            'email',
            'edatetime',
            [
                'attribute' => 'actual',
                'value' => function ($model, $key, $index, $column) {
                    return $model->actual ? 'Да' : 'Нет';
                }
            ],
            [
                'format' => 'html',
                'value' => function ($model, $key, $index, $column) {
                    return Html::a('редактировать', ['admin/update', 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>
