<?php

// Suppress startup messages
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_startup_errors', 'Off');
ini_set('display_errors', 'Off');

// Return the application
return require_once __DIR__.'/app.php'; 