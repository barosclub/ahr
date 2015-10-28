<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MEmp */

$this->title = 'Update Memp: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Memps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="memp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
