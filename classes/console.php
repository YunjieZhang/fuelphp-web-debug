<?php
namespace WebDebug;

interface Console 
{
    public function log($message);
    public function info($message);
    public function warn($message);
    public function error($message);
    public function group($message);
    public function groupEnd($message);
}
