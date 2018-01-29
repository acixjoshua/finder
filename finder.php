<?php

use WHMCS\ClientArea;
use WHMCS\Database\Capsule;
define('CLIENTAREA', true);
require __DIR__ . '/init.php';

$ca = new ClientArea();
$ca->setPageTitle('Finder');
$ca->initPage();

$ca->setTemplate('custom_finder');
$ca->output();
