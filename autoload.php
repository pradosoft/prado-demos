<?php
/**
 * Autoloader entry point for prado-demos.
 *
 * Supports two installation layouts:
 *
 *   Standalone project  — `composer install` was run inside this directory,
 *                          so vendor/autoload.php exists here.
 *
 *   Composer dependency — this package is installed inside another project's
 *                          vendor/ tree (e.g. vendor/pradosoft/prado-demos/).
 *                          No local vendor/ exists; delegate to the parent
 *                          project's autoloader three levels up.
 */
$standalone  = __DIR__ . '/vendor/autoload.php';
$asDependency = __DIR__ . '/../../autoload.php';

if (file_exists($standalone)) {
	require $standalone;
} elseif (file_exists($asDependency)) {
	require $asDependency;
} else {
	throw new \Exception("Unable to find `$standalone`, or the parent project `$asDependency` which prado-demos is a dependency within.");
}
