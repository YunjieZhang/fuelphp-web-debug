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
### Download vendor library
	$ cd fuel/packages/web-debug
    
## Configuration
In app/config/config.php

```php
'always_load' => 
    array('packages' => array(
    'web-debug',
    ...
```
# Examples
```php
WebDebug::ConsoleLog($_SERVER);
```
## Custom Configuration
Copy fuel/packages/web-debug/config/web-debug.php to under app/config

```php
return array(
	/*
	 * Environment to output the ConsoleLog
	 */
	'environment' => array(
	    Fuel::DEVELOPMENT,
	    //Fuel::TEST,
	    //Fuel::STAGE,
	    //Fuel::PRODUCTION,
	),
	/* 
	 * debug_backtrace() nest level
	 * If you wrap your ConsoleLog class, to increase the number of nested.
	 */
	'backtrace' => 0,
	);
```
## License
Copyright 2013, Yasuyuki Sasaki. Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php
