<?php
namespace Frame\Core;

class Router {
    public $routes = array();
    public $base = '';
    public $matches = array( // https://github.com/dannyvankooten/AltoRouter/blob/master/AltoRouter.php#L23
        'i'  => '[0-9]++',
		'a'  => '[0-9A-Za-z]++',
		'h'  => '[0-9A-Fa-f]++',
		'*'  => '.+?',
		'**' => '.++',
		''   => '[^/\.]++'
    );
    
    function __construct() {
        
    }
    
    function map($method, $route, $target, $) {
        $this->routes[] = array($method,$route,$target,$name);
    }
    function request($url) {
       $method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
       if (($strpos = strpos($url, '?')) !== false) {
			$url = substr($url, 0, $strpos);
		}
        
        foreach ($this->routes as $route) {

        }
    }
    
}

?>