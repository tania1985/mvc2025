<?php
class App{
    protected $controller="HomeController";
    protected $method;
    protected $params=[];

    public function __construct(){
        $url=$this->parseUrl();
       
         // Verificar el controlador
         if(file_exists('./app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }
        require_once './app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

         // Verificar el método
         if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
    }
    

    private function parseUrl() {
        if(isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return ['home'];
    }
}
?>