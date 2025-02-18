<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;

class Film extends Model {
    protected $table = 'film';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'film_id';  // Clave primaria de la tabla
}
?>
