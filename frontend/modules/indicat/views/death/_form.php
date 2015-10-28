<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\indicat\models\Death */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="death-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($hosxp, 'death_id')->textInput() ?>
    <?= $form->field($model, 'age')->textInput() ?>
  <?= $form->field($model, 'sex')->textInput() ?>
      <?= $form->field($model, 'addre')->textInput() ?>
      <?= $form->field($model, 'death_out_place')->textInput() ?>
      <?= $form->field($model, 'send_by_id')->textInput() ?>
      <?= $form->field($model, 'cpr')->textInput() ?>
      <?= $form->field($model, 'ward')->textInput() ?>
      <?= $form->field($model, 'symptoms_refer')->textInput() ?>
      <?= $form->field($model, 'death_af48hr')->textInput() ?>
    <?= $form->field($model, 'case_refer')->textInput() ?>
    
   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
