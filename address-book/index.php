<?php

/** The directory checks may be removed if performance is required **/
$basePath=dirname(__FILE__);
$assetsPath=$basePath."/assets";
$runtimePath=$basePath."/protected/runtime";
$sqliteDbDir=$basePath."/protected/pages/";
$sqliteDb=$sqliteDbDir.'sqlite.db';

if(!is_writable($assetsPath))
	die("Please make sure that the directory $assetsPath is writable by Web server process.");
if(!is_writable($runtimePath))
	die("Please make sure that the directory $runtimePath is writable by Web server process.");
if(!is_writable($sqliteDbDir))
	die("Please make sure that the directory $sqliteDbDir is writable by Web server process.");
if(!is_writable($sqliteDb))
	die("Please make sure that the file $sqliteDbDir is writable by Web server process.");

require '../vendor/autoload.php';
$application = new \Prado\TApplication;
$application->run();