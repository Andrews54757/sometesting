<?php

$load = function($dir) use (&$load){
    foreach(glob($dir) as $content) {
        if(is_dir($content)) {
            $load($content."\*");
            continue;
        }
        if(strtolower(pathinfo($content)["extension"]) == "php" && $content != __FILE__) {
            include $content;
        }
    }
};
$load(__DIR__ . '/*');

?>