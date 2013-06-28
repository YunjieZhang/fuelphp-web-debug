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
        $backtrace = debug_backtrace();
        $filepath = str_replace(APPPATH, '', $backtrace[2]['file']);
        $line = $backtrace[2]['line'];
        return $filepath.' : '.$line."\n";
    }
}
