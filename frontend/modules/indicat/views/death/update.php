<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\death */

$this->title = 'Update Death: ' . ' ' . $model->death_id;
$this->params['breadcrumbs'][] = ['label' => 'Deaths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->death_id, 'url' => ['view', 'id' => $model->death_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="death-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
