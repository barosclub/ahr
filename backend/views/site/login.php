<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Airhos-project';
?>
<div class="login-box">
    <div class="login-logo">
        <span class="fa"><?= Html::encode($this->title) ?></span>
    
    </div>
    <div class="login-box-body">
        <p class="login-box-msg"> <span class="fa fa-unlock">เข้าสู่ระบบเพื่อใช้งาน</span></p>
        <?php $form = ActiveForm::begin([

                    'id' => 'login-form']);
        ?>
        <?=
                $form->field($model, 'username', [
                    'options' => ['class' => 'form-group has-feedback'],
                    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'"
                ])
                ->label(FALSE)
                ->textInput(['placeholder' => $model->getAttributeLabel('ชื่อผู้ใช้')
                ])
        ?>
        <?=
                $form->field($model, 'password', [
                    'options' => ['class' => 'form-group has-feedback'],
                        //  'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'"
                ])
                ->label(FALSE)
                ->passwordInput(['placeholder' => $model->generateAttributeLabel('รหัสผ่าน')])
        ?>


        <div class="row">
            <div class="col-xs-8">
        <?= $form->field($model, 'rememberMe')->checkbox() ?>
       </div>
            <div class="col-xs-4">
        <?= Html::submitButton('เข้าสู่ระบบ', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
        </div>
        </div>
    
   
 <?php ActiveForm::end(); ?>
 </div>
</div>
