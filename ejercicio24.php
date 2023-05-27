<!-- Clases en PHP -->
<?php
class Persona
{
    public $nombre;

    public function asignarNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre."<br/>";
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
?>