<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\indicat\models\Death */

$this->title = $model->death_id;
$this->params['breadcrumbs'][] = ['label' => 'Deaths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="death-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->death_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->death_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'death_id',
            'hn',
            'age',
            'sex',
            'addre',
            'death_out_place',
            'send_by_id',
            'cpr',
            'ward',
            'symptoms_refer',
            'death_af48hr',
            'case_refer',
        ],
    ]) ?>

</div>
