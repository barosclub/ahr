<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Hperson */
/* @var $form yii\widgets\ActiveForm */
use common\models\HospitalDepartment;
use common\models\Hpname;
use common\models\PositionHperson;
use common\models\Sex;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
?>


    <div id="w1-container" class="tabs-x tabs-above tab-align-left"><ul id="w1" class="nav nav-tabs" role="tablist"><li class="active"><a href="#w1-tab0" data-toggle="tab" role="tab"><i class="glyphicon glyphicon-user"></i> ข้อมูลส่วนตัว</a></li>
</ul>
<div class="tab-content">
    <div id="w1-tab0" class="tab-pane fade in active"><div class="page-header-line">
    <h3><label class="label label-success">ข้อมูลเข้าระบบ</label></h3>
<!--    <small>You can change your 
        <label class="label label-info">username</label>, <label class="label label-success">fullname</label>, 
        <label class="label label-warning">hobby</label>, <label class="label label-danger">บันทึกเกี่ยวกับตัวคุณ</label> and the other's</small>-->
</div>
<hr/>
    <?php $form = ActiveForm::begin(); ?>
<div class="row">    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <?=
            $form->field($user,'username',['options'=>['class'=>'form-group']])
            ->textInput(['maxlength' => TRUE])
    ?><?=
    $form->field($user, 'password_hash')->passwordInput([
        'maxlength' => TRUE
    ])
    ?>
    </div>
     </div>  
<h3><label class="label label-success">ข้อมูลส่วนตัว</label></h3>
<!--    <small>You can change your 
        <label class="label label-info">username</label>, <label class="label label-success">fullname</label>, 
        <label class="label label-warning">hobby</label>, <label class="label label-danger">บันทึกเกี่ยวกับตัวคุณ</label> and the other's</small>-->
</div>
<hr/>
<div class="row">    
    <div class="col-xs-2 col-sm-2 col-md-2">
  <?=
            $form->field($model, 'pname')
            ->dropDownList(ArrayHelper::map(HPname::find()->all(), 'id', 'hpname'),
                    ['prompt' => '<--ระบุ-->'])
    ?>
</div> 

    <div class="col-xs-3 col-sm-3 col-md-3">
        <?=
            $form->field($model, 'fname')
            ->textInput()
    ?>
    </div>    
    <div class="col-xs-3 col-sm-3 col-md-3">
        
        <?=
            $form->field($model, 'lname')
            ->textInput()
    ?>

    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'cid')
            ->textInput(['maxlength' =>TRUE])
           
    ?>
</div>

</div>
<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3">
      <?=
    $form->field($user, 'email')->input('email', [
        'maxlength' => 20
    ])
    ?>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2"> <?= $form->field($model, 'sex')
            ->dropDownList(ArrayHelper::map(Sex::find()->all(),'id','name'), ['prompt' => '<--ระบุ-->']) ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
        <div class="input-group"><?= $form->field($model, 'birth_date')
         ->widget(DatePicker::ClassName(),
    [
    'name' => 'check_issue_date', 
    'options' => ['placeholder' => 'Select date ...'],
    'pluginOptions' => [
         'language'=>'th',
        'format' => 'yyyy/mm/dd',
        'todayHighlight' => true
    ]
]);?></div>  


</div>
  
</div>
  <h3><label class="label label-success">ข้อมูลการทำงาน</label></h3>
</div>
<hr/>
 
    <?= $form->field($model, 'person_img')->fileInput() ?>

    <?=
            $form->field($model, 'position_id')
            ->dropDownList(ArrayHelper::map(PositionHperson::find()->all(), 'position_id', 'position_name')
               )
    ?>

    
    

  
    <?=
            $form->field($model, 'department_id')
            ->dropDownList(ArrayHelper::map(HospitalDepartment::find()->all(), 'id', 'name'), 
                
        ['prompt' => 'Select'])
    ?>

 

    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    </div>
<?php ActiveForm::end(); ?>
