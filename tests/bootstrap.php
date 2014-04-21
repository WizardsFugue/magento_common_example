<?php

require_once( __DIR__.'/../bootstrap.php');


Mage::setIsDeveloperMode(true);


Mage::register('custom_entry_point', true);


ini_set('display_errors', 1);

umask(0);

if(!isset($options)){
    $options = array();
}

Mage::app('', 'store', $options);

spl_autoload_unregister(array(Varien_Autoload::instance(),'autoload'));


