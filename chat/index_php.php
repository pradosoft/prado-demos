<?php

$basePath=dirname(__FILE__);
$assetsPath=$basePath."/assets";
$runtimePath=$basePath."/protected/runtime";

$sqliteDbDir = $basePath."/protected/App_Code";
$sqliteDb = $sqliteDbDir."/chat.db";

if(!is_writable($assetsPath))
	die("Please make sure that the directory $assetsPath is writable by Web server process.");
if(!is_writable($runtimePath))
	die("Please make sure that the directory $runtimePath is writable by Web server process.");
if(!is_writable($sqliteDbDir))
	die("Please make sure that the directory $sqliteDbDir is writable by Web server process.");
if(!is_writable($sqliteDb))
	die("Please make sure that the sqlite file $sqliteDb is writable by Web server process.");

require '../vendor/autoload.php';
$application = new \Prado\TApplication('protected', false, \Prado\TApplication::CONFIG_TYPE_PHP);
$application->run();