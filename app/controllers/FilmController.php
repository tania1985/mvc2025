<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\models\Film;

class FilmController extends Controller {
    // Mostrar todas las películas
    public function index(...$params) {
        $films = Film::all();
        $this->view("film_list", $films);
    }
}
?>
