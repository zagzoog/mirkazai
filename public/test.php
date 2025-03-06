<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "PHP Version: " . PHP_VERSION . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Script Filename: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";

$included_files = get_included_files();
echo "<pre>Included files:\n";
print_r($included_files);
echo "</pre>";

phpinfo();
?> 