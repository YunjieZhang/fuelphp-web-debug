<?php
namespace WebDebug;

/**
 * ConsoleLog abstract Class.
 */
abstract class BaseImpl
{
    /**
     * Get Debug Back Trace.
     */
    protected function backtrace()
    {
        $backtrace_level = \Config::get('web-debug.backtrace');
        if (count(debug_backtrace()) < 3) {
            return '';    
        }

        $backtrace = debug_backtrace();
        $filepath = str_replace(APPPATH, '', $backtrace[$backtrace_level+2]['file']);
        $line = $backtrace[$backtrace_level+2]['line'];
        
        return $filepath.' : '.$line."\n";
    }
}
