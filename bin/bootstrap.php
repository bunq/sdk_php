<?php
/**
 * Load autoload.php from expected directories.
 */
const FILENAME_AUTOLOAD_LOCAL = __DIR__ . '/../vendor/autoload.php';
const FILENAME_AUTOLOAD_VENDOR = __DIR__ . '/../../../autoload.php';
const ERROR_MISSING_AUTOLOAD = 'Missing autoload.php, run composer install.' . PHP_EOL;

if (file_exists(FILENAME_AUTOLOAD_LOCAL)) {
    include FILENAME_AUTOLOAD_LOCAL;
} elseif (file_exists(FILENAME_AUTOLOAD_VENDOR)) {
    include FILENAME_AUTOLOAD_VENDOR;
} else {
    echo ERROR_MISSING_AUTOLOAD;
    exit(1);
}
