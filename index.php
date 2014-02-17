<?php
//
// PHASE: BOOTSTRAP
//
define('DAVID_INSTALL_PATH', dirname(__FILE__));
define('DAVID_SITE_PATH', DAVID_INSTALL_PATH . '/site');

require(DAVID_INSTALL_PATH.'/src/CDavid/bootstrap.php');

$da = CDavid::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$da->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$da->ThemeEngineRender();
