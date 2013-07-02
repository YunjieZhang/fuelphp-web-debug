# fuelphp-web-debug

## requirements

### Use Firefox

* [FirePHP PHP Library](https://github.com/firephp/firephp-core)
* [FirePHP Firefox Add-ons](https://addons.mozilla.org/ja/firefox/addon/firephp/)

### Use Google Chrome

* [ChromePhp PHP Library](https://github.com/ccampbell/chromephp)
* [Chrome Logger Goolge Chrome Extension](https://chrome.google.com/webstore/detail/chrome-logger/noaneddfkdjfnfdakjjmocngnfkfehhd)

---

## Install Package

### Download package
    $ git submodule add git@github.com:ya-sasaki/fuelphp-web-debug.git fuel/packages/web-debug

### Composer Install

    $ cd fuel/packages/web-debug
    $ wget http://getcomposer.org/composer.phar 
    $ php composer.phar install

## Configuration
In app/config/config.php

```php
...
'always_load' => 
    array('packages' => array(
            'web-debug',
...
```

# Examples

```php
WebDebug\ConsoleLog::group('foo');
WebDebug\ConsoleLog::log($_SERVER);            
WebDebug\ConsoleLog::info('hoge');            
WebDebug\ConsoleLog::warn('piyo');            
WebDebug\ConsoleLog::error('hage');            
WebDebug\ConsoleLog::groupEnd('foo');
```

## Custom Configuration
Copy fuel/packages/web-debug/config/web-debug.php to under app/config

```php
<?php
return array(
    /*
     * Environment to output the ConsoleLog
     */
    'active' => array(
        Fuel::DEVELOPMENT => true,
        //Fuel::TEST => false,
        //Fuel::STAGE => false,
        //Fuel::PRODUCTION => false,
    ),
);
```

## License

Copyright 2013, Yasuyuki Sasaki. Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php
