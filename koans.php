<?php
if(!defined('STDIN'))  define('STDIN',  fopen('php://stdin',  'r'));
if(!defined('STDOUT')) define('STDOUT', fopen('php://stdout', 'w'));
if(!defined('STDERR')) define('STDERR', fopen('php://stderr', 'w'));

require 'vendor/autoload.php';

$tests = new PHPKoans\Tests\AllTests();
$tests->outputHeader();
$tests->testChapters();
$tests->outputFooter();
