<?php
require_once("./core/Controller.php");

class ActorController extends Controller{
    public function index(...$params){
        echo "hola desde index de ActorController";
    }
    public function new(...$params){
        $this->view("new_actor");
    }

}
?>