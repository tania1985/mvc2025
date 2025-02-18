<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model {
    protected $table = 'film';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'film_id';  // Clave primaria de la tabla
    public $timestamps = false;  // Desactivar los timestamps si no tienes `created_at` y `updated_at`
}
?>
