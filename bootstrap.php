<?php
/**
 * ConsoleLog packages
 *
 * @package     console
 * @version     1.0
 * @author      Yasuyuki Sasaki
 * @link        github link
 */

if (!defined('WEB_DEBUG_ROOT')) {
    define('WEB_DEBUG_ROOT', __DIR__.DS);
    require(WEB_DEBUG_ROOT.'vendor'.DS.'chromephp'.DS.'ChromePhp.php');
    require(WEB_DEBUG_ROOT.'vendor'.DS.'firephp'.DS.'lib'.DS.'FirePHPCore'.DS.'FirePHP.class.php');
    require(WEB_DEBUG_ROOT.'vendor'.DS.'firephp'.DS.'lib'.DS.'FirePHPCore'.DS.'fb.php');
}

Autoloader::add_classes(array(
    'WebDebug\\ConsoleLog'         => WEB_DEBUG_ROOT.'classes'.DS.'log.php',
    'WebDebug\\Console'     => WEB_DEBUG_ROOT.'classes'.DS.'console.php',
    'WebDebug\\ChromeImpl'  => WEB_DEBUG_ROOT.'classes'.DS.'chrome_impl.php',
    'WebDebug\\FireFoxImpl' => WEB_DEBUG_ROOT.'classes'.DS.'firefox_impl.php',
    'WebDebug\\BaseImpl'    => WEB_DEBUG_ROOT.'classes'.DS.'base_impl.php',
));
Config::load('web-debug', true);

/*
 * End of file bootstrap.php
 */