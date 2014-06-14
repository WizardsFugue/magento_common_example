<?php

require_once( __DIR__.'/../bootstrap.php');

require_once( __DIR__.'/phpunit/WebTestCase.php');
require_once( __DIR__.'/phpunit/Response.php');
require_once( __DIR__.'/phpunit/ResponseSendException.php');

Mage::setIsDeveloperMode(true);


Mage::register('custom_entry_point', true);

Mage::$headersSentThrowsException = false;

ini_set('display_errors', 1);

umask(0);

if(!isset($options)){
    $options = array();
}

Mage::app('', 'store', $options);
Mage::app()->cleanCache();

//spl_autoload_unregister(array(Varien_Autoload::instance(),'autoload'));


