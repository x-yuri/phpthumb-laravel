<?php
//////////////////////////////////////////////////////////////
//   phpThumb() by James Heinrich <info@silisoftware.com>   //
//        available at http://phpthumb.sourceforge.net      //
//         and/or https://github.com/JamesHeinrich/phpThumb //
//////////////////////////////////////////////////////////////
///                                                         //
// See: phpthumb.readme.txt for usage instructions          //
//      NOTE: THIS FILE HAS NO EFFECT IN OBJECT MODE!       //
//            THIS CONFIG FILE ONLY APPLIES TO phpThumb.php //
//                                                         ///
//////////////////////////////////////////////////////////////

define('phpThumbConfigFileVersion', '1.7.12');
ob_start();
if (!file_exists(dirname(__FILE__).'/phpthumb.functions.php') || !include_once(dirname(__FILE__).'/phpthumb.functions.php')) {
	ob_end_flush();
	die('failed to include_once(phpthumb.functions.php) - realpath="'.realpath(dirname(__FILE__).'/phpthumb.functions.php').'"');
}
ob_end_clean();



$c = require_once __DIR__ . '/../../../../config/phpthumb.php';
$PHPTHUMB_CONFIG = $c['config'];
$PHPTHUMB_DEFAULTS_GETSTRINGOVERRIDE = $c['defaults_get_string_override'];
$PHPTHUMB_DEFAULTS_DISABLEGETPARAMS = $c['defaults_disable_get_params'];
$PHPTHUMB_DEFAULTS = $c['defaults'];
