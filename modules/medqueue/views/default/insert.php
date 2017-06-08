<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;

?>

<div class="medqueue-default-index">
    <h1>Запись на приём</h1>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'firstname') ?>

        <?= $form->field($model, 'lastname') ?>

        <?= $form->field($model, 'phone') ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'edatetime')->widget(DateTimePicker::className(), [
            'language' => 'ru',
            'size' => 'ms',
            'template' => '{input}',
            'pickButtonIcon' => 'glyphicon glyphicon-time',
            //'inline' => true,
            'clientOptions' => [
                'startView' => 2,
                'minView' => 0,
                'maxView' => 1,
                'autoclose' => true,
                'linkFormat' => 'dd MM yyyy - HH:ii:00 P', // if inline = true
                // 'format' => 'HH:ii P', // if inline = false
                'todayBtn' => true
            ]
        ]); ?>



        <?= Html::submitButton('Записаться', ['class' => 'btn btn-primary']) ?>

    <?php ActiveForm::end(); ?>
</div>
