<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>PHP Test Page</h1>";
echo "<p>PHP Version: " . PHP_VERSION . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>Current File: " . __FILE__ . "</p>";

phpinfo();
?> 