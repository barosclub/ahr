<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
//use frontend\assets\AdminLteAsset;
use frontend\assets\MaterialAsset;
use common\widgets\Alert;
use yii\helpers\Url;
MaterialAsset::register($this);
//AdminLteAsset::register($this);
//AppAsset::register($this);
 $this->title ='Airhos-Project'; ?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>

<div class="wrap">
    

    <div class="container">
       
        <?= Alert::widget() ?>
        <?= $content?>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
