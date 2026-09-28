<?php
define('DB_HOST', 'hostname.remote.ac'); // change me
define('DB_PORT', 3306);
define('DB_USER', 'your-db-user'); // change me
define('DB_PASS', 'your-db-password'); // change me
define('DB_NAME', 'db-name'); // change me

date_default_timezone_set('Europe/London');

// The URL where YOUR copy of the site runs, with no trailing slash.
// Usually http://localhost/<the folder you cloned into>
define('BASE_URL', 'http://localhost/ucw-testing-platform');
// On production, this should be set to:
// define('BASE_URL', 'https://<hostname>.remote.ac');


// Show errors while developing. Set to false on production server.
define('DEBUG', true);
if (DEBUG) {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
}

