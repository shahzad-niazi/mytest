<?php
phpinfo();
die('d');
require 'vendor/autoload.php';

$test = new Test();
var_dump($test->getTest());
echo "test";