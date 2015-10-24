<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\death */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="death-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'death_id')->textInput() ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_date')->textInput() ?>

    <?= $form->field($model, 'death_diag_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_diag_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_diag_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_diag_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_diag_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_cause')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <?= $form->field($model, 'last_pttype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'an')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nopreg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wpreg')->textInput() ?>

    <?= $form->field($model, 'odisease')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_time')->textInput() ?>

    <?= $form->field($model, 'death_diag_date_1')->textInput() ?>

    <?= $form->field($model, 'death_diag_date_2')->textInput() ?>

    <?= $form->field($model, 'death_diag_date_3')->textInput() ?>

    <?= $form->field($model, 'death_diag_date_4')->textInput() ?>

    <?= $form->field($model, 'death_cause_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_cert_id')->textInput() ?>

    <?= $form->field($model, 'death_cert_date')->textInput() ?>

    <?= $form->field($model, 'death_cert_doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_source')->textInput() ?>

    <?= $form->field($model, 'death_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newborn_death_cause_id')->textInput() ?>

    <?= $form->field($model, 'hos_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autopsy_perform')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_hospcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_preg_42_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_datetime')->textInput() ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_out_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'send_by_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'symptoms_refer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'death_af48hr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'case_refer')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
