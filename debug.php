<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "<h1>Debug Info</h1>";
echo "<pre>";

echo "Current Directory: " . __DIR__ . "\n";
echo "APP_PATH: " . __DIR__ . '/app' . "\n";

echo "\nChecking Core files:\n";
$router_file = __DIR__ . '/app/Core/Router.php';
echo "Router file exists: " . (file_exists($router_file) ? 'Yes' : 'No') . "\n";
echo "Router file path: " . $router_file . "\n";

if (file_exists($router_file)) {
    echo "Router file permissions: " . substr(sprintf('%o', fileperms($router_file)), -4) . "\n";
    echo "Router file owner: " . posix_getpwuid(fileowner($router_file))['name'] . "\n";
}

echo "\nTrying to load Router class:\n";
require_once $router_file;
echo "Router file loaded successfully\n";

echo "\nChecking if class exists:\n";
echo "Router class exists: " . (class_exists('App\Core\Router') ? 'Yes' : 'No') . "\n";

echo "</pre>"; 