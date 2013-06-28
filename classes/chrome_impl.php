<?php
namespace WebDebug;

/**
 * ChromePhp implements Class.
 */
class ChromeImpl extends BaseImpl implements Console
{
    public function log($message)
    {
        \ChromePhp::log(parent::backtrace(), $message);
    }
    public function info($message)
    {
        \ChromePhp::info(parent::backtrace(), $message);
    }
    public function warn($message)
    {

        \ChromePhp::warn(parent::backtrace(), $message);
    }
    public function error($message)
    {
        \ChromePhp::error(parent::backtrace(), $message);
    }
    public function group($message)
    {
        \ChromePhp::group(parent::backtrace(), $message);
    }
    public function groupEnd($message)
    {
        \ChromePhp::groupEnd(parent::backtrace(), $message);
    }
}
