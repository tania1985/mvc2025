<?php
class App{
    protected $controller="HomeController";
    protected $method;
    protected $params=[];

    public function __construct(){
        $url=$this->parseUrl();
        var_dump($url);
       
         // Verificar el controlador
         if(file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
    }
    

    private function parseUrl() {
        if(isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return ['home'];
    }
}
?>