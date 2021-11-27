<?php
class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public function __construct(){
        $url = $this->parseURL();

    }

    public function parseURL(){
        if( isset($_GET['url'])){
            $url = rtrims($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}