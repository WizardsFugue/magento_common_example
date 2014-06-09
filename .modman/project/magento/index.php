<?php

/**
 * Error reporting
 */
error_reporting(E_ALL | E_STRICT);

/**
 * Compilation includes configuration file
 */
define('MAGENTO_ROOT', getcwd());



$mageFilename = MAGENTO_ROOT . '/app/Mage.php';
$maintenanceFile = 'maintenance.flag';

if (file_exists($maintenanceFile)) {
    include_once MAGENTO_ROOT . '/errors/503.php';
    exit;
}


require_once MAGENTO_ROOT . "/../bootstrap.php";
require_once MAGENTO_ROOT . '/../vendor/autoload.php';
require_once $mageFilename;

require_once MAGENTO_ROOT . '/../.modman/partletsMagentoBridge/bootstrap.php';

#Varien_Profiler::enable();

//if (isset($_SERVER['MAGE_IS_DEVELOPER_MODE'])) {
    Mage::setIsDeveloperMode(true);
//}

#ini_set('display_errors', 1);

umask(0);

/* Store or website code */
$mageRunCode = isset($_SERVER['MAGE_RUN_CODE']) ? $_SERVER['MAGE_RUN_CODE'] : '';

/* Run store or run website */
$mageRunType = isset($_SERVER['MAGE_RUN_TYPE']) ? $_SERVER['MAGE_RUN_TYPE'] : 'store';

Mage::run($mageRunCode, $mageRunType, $mage_init_options);
