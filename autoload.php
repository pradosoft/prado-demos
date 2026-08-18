<?php
/**
 * Autoloader entry point for prado-demos.
 *
 * Supports three installation layouts:
 *
 *   Standalone project  — `composer install` was run inside this directory,
 *                          so vendor/autoload.php exists here.
 *
 *   Composer dependency — this package is installed inside another project's
 *     (copied)             vendor/ tree (e.g. vendor/pradosoft/prado-demos/);
 *                          delegate to the parent project's autoloader, which
 *                          lives at vendor/autoload.php — two levels up from
 *                          here. A project-root autoload shim (three levels up)
 *                          is tried only as a last-resort fallback.
 *
 *   Composer dependency — this package is symlinked into another project's
 *     (symlinked)          vendor/ tree (a composer "path" repository).
 *                          __DIR__ cannot locate the parent here: PHP
 *                          resolves symlinks in __DIR__/__FILE__, so relative
 *                          hops from this file land outside the parent
 *                          project. The entry script's path, however, is not
 *                          resolved — so the parent project root is found by
 *                          splitting $_SERVER['SCRIPT_FILENAME'] at its first
 *                          /vendor/ segment.
 */

// A Composer autoloader is already active (e.g. the parent project's test
// bootstrap loaded it before including a demo); a second loader would register
// a duplicate copy of every class.
if (class_exists('Composer\Autoload\ClassLoader', false)) {
	return;
}

$candidates = [];

$script = str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'] ?? '');
$vendorPos = strpos($script, '/vendor/');
if ($vendorPos !== false) {
	// Served from inside a parent project's vendor/ tree (copied or
	// symlinked): the parent's autoloader must win over any vendor/ of our
	// own, or two copies of Prado end up loadable at once.
	$candidates[] = substr($script, 0, $vendorPos) . '/vendor/autoload.php';
}

$candidates[] = __DIR__ . '/vendor/autoload.php';    // standalone checkout
$candidates[] = __DIR__ . '/../../autoload.php';     // copied into vendor/pradosoft/prado-demos: parent's vendor/autoload.php (two levels up), no SCRIPT_FILENAME (CLI)
$candidates[] = __DIR__ . '/../../../autoload.php';  // fallback for layouts exposing a project-root autoload shim (three levels up)

foreach ($candidates as $autoload) {
	if (file_exists($autoload)) {
		require $autoload;
		return;
	}
}

throw new \Exception('Unable to find a Composer autoloader; tried: ' . implode(', ', $candidates));
