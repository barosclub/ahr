<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

use backend\assets\AdminLteAsset;
use common\widgets\Alert;
use yii\helpers\Url;


AdminLteAsset::register($this);
//AppAsset::register($this);
?>
<!DOCTYPE html>
<html> <?php $this->beginPage() ?>
  <head>
     <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  </head>
 <!-- BEGIN HEADER -->
<div class="page-header navbar  navbar-default-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<!--<a href="index.html"><img src="../../js/assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/></a>-->
		</div>
	</div>
</div>
<!-- END HEADER -->
<div class="clearfix"></div>
  <?=$content ?>
   <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
