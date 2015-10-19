<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Hperson */

$this->title = 'Create Hperson';
$this->params['breadcrumbs'][] = ['label' => 'Hpeople', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading">
       
            <small><?= Html::encode($this->title) ?></small>
        
    </div>
    <div class="panel-body">
   

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
    ]) ?>
</div>
</div>
