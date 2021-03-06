<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\indicat\models\Death */

$this->title = 'Update Death: ' . ' ' . $hosxp->death_id;
$this->params['breadcrumbs'][] = ['label' => 'Deaths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $hosxp->death_id, 'url' => ['view', 'id' => $hosxp->death_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="death-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
      'model' => $model,
        'hosxp'=> $hosxp,
    ]) ?>

</div>
