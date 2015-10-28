<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace frontend\assets;
use yii\web\AssetBundle;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminLteAsset extends AssetBundle {
    public $sourcePath = '@themes/AdminLte';
    public $baseUrl = '@web';
    public $css = [
        'dist/css/AdminLTE.min.css',
         'bootstrap/css/bootstrap.min.css',
        'dist/css/font-awesome/css/font-awesome.min.css',
       //ซ้ำกับ bootstrap'dist/css/ionic/css/ionic.min.css',
        'dist/css/skins/_all-skins.min.css',
        //'plugins/datepicker/datepicker3.css',
        'plugins/iCheck/square/blue.css',
      
        
    ];
    public $js = [
        'dist/js/app.min.js',
        //'dist/js/raphael-min.js',
      // 'plugins/datatables/jquery.dataTables.min.js',
       // 'plugins/datatables/dataTables.bootstrap.js',
      //  'bootstrap/js/bootstrap.min.js',
       //'script/script.js',
        
        
       //'plugins/sparkline/jquery.sparkline.min.js',
      // 'plugins/jQuery/jquery-2.1.4.min.js',
      //  'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
      //  'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
      //  'plugins/daterangepicker/daterangepicker.js',
      //  'plugins/datepicker/bootstrap-datepicker.js',
       // 'plugins/iCheck/icheck.min.js',
      //  'plugins/slimScroll/jquery.slimscroll.min.js',
      // 'plugins/chartjs/chart.min.js',
       //'plugins/jQueryUI/jquery-ui.min.js',
      //   'plugins/morris/morris.min.js',
      // 'plugins/knob/jquery.knob.js',
       
    ];
    public $depends = [
       'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}