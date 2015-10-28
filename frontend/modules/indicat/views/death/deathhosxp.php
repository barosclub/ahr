<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\indicat\models\DeathSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deaths';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="death-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Death', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'death_id',
            'hn','cid',
            [
              'header'=>'ptname',
                'value'=>'patients.fname',
            ],
             [
              'header'=>'ptname',
                'value'=>'patients.lname',
            ],
           
          
         
            // 'death_out_place',
            // 'send_by_id',
            // 'cpr',
            // 'ward',
            // 'symptoms_refer',
            // 'death_af48hr',
            // 'case_refer',

            ['class' => 'yii\grid\ActionColumn'],
            
        ],
    ]); ?>

</div>
