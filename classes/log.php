<?php
namespace WebDebug;
class ConsoleLog {
    
    private static $logger;
    
    private static function initialize()
    {
        if (in_array(\Fuel::$env, \Config::get('web-debug.environment')) && // 出力対象の環境
            !isset(static::$logger) && // Logger初期化済
            isset($_SERVER['HTTP_USER_AGENT'])) { // Httpでのアクセス
            if (strstr($_SERVER['HTTP_USER_AGENT'], 'Firefox') != null) {
                static::$logger = new FireFoxImpl;
            }
            if (strstr($_SERVER['HTTP_USER_AGENT'], 'Chrome') != null) {
                static::$logger = new ChromeImpl; 
            }
        }
    }

    public static function __callStatic($method, $args)
    {
        static::initialize();
        if (isset(static::$logger)) {
            foreach ($args as $message) {
                static::$logger->$method($message);
            }
        }
    }
}
