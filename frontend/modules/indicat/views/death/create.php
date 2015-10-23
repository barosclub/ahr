<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\indicat\models\Death */

$this->title = 'Create Death';
$this->params['breadcrumbs'][] = ['label' => 'Deaths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="death-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
