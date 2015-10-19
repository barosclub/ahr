<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\personal\models\HpersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hpeople';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hperson-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hperson', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'pname',
            'fname',
            'lname',
            'photo',
            // 'position_id',
            // 'sex',
            // 'cid',
            // 'birth_date',
            // 'department_id',
            // 'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
