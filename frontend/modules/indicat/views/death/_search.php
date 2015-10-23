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

    <?= $form->field($model, 'cid') ?>

    <?= $form->field($model, 'hcode') ?>

    <?= $form->field($model, 'death_date') ?>

    <?php // echo $form->field($model, 'death_diag_1') ?>

    <?php // echo $form->field($model, 'death_diag_2') ?>

    <?php // echo $form->field($model, 'death_diag_3') ?>

    <?php // echo $form->field($model, 'death_diag_4') ?>

    <?php // echo $form->field($model, 'death_diag_other') ?>

    <?php // echo $form->field($model, 'death_cause') ?>

    <?php // echo $form->field($model, 'death_place') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'last_pttype') ?>

    <?php // echo $form->field($model, 'an') ?>

    <?php // echo $form->field($model, 'nopreg') ?>

    <?php // echo $form->field($model, 'wpreg') ?>

    <?php // echo $form->field($model, 'odisease') ?>

    <?php // echo $form->field($model, 'death_time') ?>

    <?php // echo $form->field($model, 'death_diag_date_1') ?>

    <?php // echo $form->field($model, 'death_diag_date_2') ?>

    <?php // echo $form->field($model, 'death_diag_date_3') ?>

    <?php // echo $form->field($model, 'death_diag_date_4') ?>

    <?php // echo $form->field($model, 'death_cause_text') ?>

    <?php // echo $form->field($model, 'death_cert_id') ?>

    <?php // echo $form->field($model, 'death_cert_date') ?>

    <?php // echo $form->field($model, 'death_cert_doctor') ?>

    <?php // echo $form->field($model, 'death_source') ?>

    <?php // echo $form->field($model, 'death_number') ?>

    <?php // echo $form->field($model, 'newborn_death_cause_id') ?>

    <?php // echo $form->field($model, 'hos_guid') ?>

    <?php // echo $form->field($model, 'autopsy_perform') ?>

    <?php // echo $form->field($model, 'no_detail') ?>

    <?php // echo $form->field($model, 'death_hospcode') ?>

    <?php // echo $form->field($model, 'death_preg_42_day') ?>

    <?php // echo $form->field($model, 'update_datetime') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
