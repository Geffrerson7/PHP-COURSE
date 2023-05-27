<!-- Visibilidad de datos -->
<?php
class Persona
{
    public $nombre;
    private $edad;//Se puede acceder únicamente desde la clase que lo definió
    protected $altura;//solo se puede acceder desde la misma clase o clases heredadas
    public function asignarNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre."<br/>";
    }

    public function imprimirEdad(){
        $this->edad=20;
        return "Mi edad es ".$this->edad;
    }
}
$objetoAlumno = new Persona();
$objetoAlumno->asignarNombre("Gefferson");

$objetoProfesor = new Persona();
$objetoProfesor->asignarNombre("Max");

echo $objetoAlumno->nombre."<br/>";
echo $objetoProfesor->nombre."<br/>";

$objetoAlumno->imprimirNombre();
$objetoProfesor->imprimirNombre();

echo $objetoAlumno->imprimirEdad();
?>