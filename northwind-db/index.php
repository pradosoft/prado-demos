<?php

$basePath=dirname(__FILE__);
$assetsPath=$basePath.'/assets';
$runtimePath=$basePath.'/protected/runtime';

if(!is_writable($assetsPath))
	die("Please make sure that the directory $assetsPath is writable by Web server process.");
if(!is_writable($runtimePath))
	die("Please make sure that the directory $runtimePath is writable by Web server process.");

/** SQLite Northwind database file **/
$sqlite_dir = $basePath.'/protected/data';
$sqlite_db = $sqlite_dir.'/Northwind.db';
if(!is_writable($sqlite_dir))
	die("Please make sure that the directory $sqlite_dir is writable by Web server process.");
if(!is_writable($sqlite_db))
	die("Please make sure that the sqlite database file $sqlite_db is writable by Web server process.");

require '../vendor/autoload.php';
$application = new \Prado\TApplication;
$application->run();