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
            'cid',
            'hcode',
            'death_date',
            'death_diag_1',
            'death_diag_2',
            'death_diag_3',
            'death_diag_4',
            'death_diag_other',
            'death_cause',
            'death_place',
            'last_update',
            'last_pttype',
            'an',
            'nopreg',
            'wpreg',
            'odisease',
            'death_time',
            'death_diag_date_1',
            'death_diag_date_2',
            'death_diag_date_3',
            'death_diag_date_4',
            'death_cause_text',
            'death_cert_id',
            'death_cert_date',
            'death_cert_doctor',
            'death_source',
            'death_number',
            'newborn_death_cause_id',
            'hos_guid',
            'autopsy_perform',
            'no_detail',
            'death_hospcode',
            'death_preg_42_day',
            'update_datetime',
            'staff',
        ],
    ]) ?>

</div>
