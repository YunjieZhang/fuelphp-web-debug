<?php
namespace WebDebug;

/**
 * FirePHP implements Class.
 */
class FireFoxImpl extends BaseImpl implements Console
{
    public function log($message)
    {
        \FB::log(parent::backtrace());
        \FB::log($message);
    }
    public function info($message)
    {
        \FB::info(parent::backtrace());
        \FB::info($message);
    }
    public function warn($message)
    {
        \FB::warn(parent::backtrace());
        \FB::warn($message);
    }
    public function error($message)
    {
        \FB::error(parent::backtrace());
        \FB::error($message);
    }
    public function group($name)
    {
        \FB::log(parent::backtrace());
        \FB::group($name);
    }
    public function groupEnd($message)
    {
        \FB::log(parent::backtrace());
        \FB::groupEnd();
    }
}
