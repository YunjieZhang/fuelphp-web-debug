<?php
namespace WebDebug;

class ConsoleLog {
    
    private static $logger;
    
    private static function initialize()
    {
        \Config::load('web-debug', true);
        if (\Config::get('web-debug.active.'.\Fuel::$env) && //  Out Environment
            !isset(static::$logger) && 
            isset($_SERVER['HTTP_USER_AGENT'])) { 
            // from Firefox
            if (strstr($_SERVER['HTTP_USER_AGENT'], 'Firefox') != null) {
                static::$logger = new FireFoxImpl;
            }
            // from Google Chrome
            if (strstr($_SERVER['HTTP_USER_AGENT'], 'Chrome') != null) {
                static::$logger = new ChromeImpl; 
            }
        }
    }

    /**
     * ConsoleLog::log, warn, error, etc...
     */
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
