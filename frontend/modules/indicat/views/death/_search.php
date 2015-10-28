<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\indicat\models\DeathSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="death-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'death_id') ?>

    <?= $form->field($model, 'hn') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'sex') ?>

    <?= $form->field($model, 'addre') ?>

    <?php // echo $form->field($model, 'death_out_place') ?>

    <?php // echo $form->field($model, 'send_by_id') ?>

    <?php // echo $form->field($model, 'cpr') ?>

    <?php // echo $form->field($model, 'ward') ?>

    <?php // echo $form->field($model, 'symptoms_refer') ?>

    <?php // echo $form->field($model, 'death_af48hr') ?>

    <?php // echo $form->field($model, 'case_refer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
