<?php
namespace Frame\Core;
    
class Main {
    
    public $configuration;
    
    function __construct() {
       $this->config = include __DIR__ . '/../configuration.php';
       $this->serve($_SERVER['REQUEST_URI']);
    }
    function serve($uri) {
        echo $uri;
    }
    
}



?>