<?php
class App{
    protected $controller="HomeController";
    protected $method;
    protected $params=[];

    public function __construct(){
        
    }

    private function parseUrl() {
        if(isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return ['home'];
    }
}
?>