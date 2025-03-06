<?php

function debug_included_files() {
    $files = get_included_files();
    echo "<pre>Included files:\n";
    foreach ($files as $file) {
        echo "$file\n";
    }
    echo "</pre>";
    die();
} 