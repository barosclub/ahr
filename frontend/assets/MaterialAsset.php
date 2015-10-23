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
class MaterialAsset extends AssetBundle {
    public $sourcePath = '@themes/Material';
    public $baseUrl = '@web';
    public $css = [
        'css/base.min.css',
        'css/project.min.css',
      
        'font-awesome/css/font-awesome.min.css',
      
        //'dist/css/skins/_all-skins.min.css',
        //'plugins/datepicker/datepicker3.css',
       // 'plugins/iCheck/square/blue.css',
       //'plugins/daterangepicker/daterangepicker-bs3.css',
       // 'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        //'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        
        
    ];
    public $js = [
       
         'js/base.min.js',
        'js/project.min.js'
      
       // 'bootstrap/js/bootstrap.min.js',
       // 'plugins/fastclick/fastclick.min.js',
        
        
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
      //  'yii\bootstrap\BootstrapAsset',
    ];
}