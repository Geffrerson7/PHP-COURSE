<!-- Constructor de PHP -->
<?php
class Persona
{
    public $nombre;
    private $edad; //Se puede acceder únicamente desde la clase que lo definió
    protected $altura; //solo se puede acceder desde la misma clase o clases heredadas

    function __construct($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }
    public function asignarNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre()
    {
        echo "Hola soy " . $this->nombre . "<br/>";
    }

    public function imprimirEdad()
    {
        $this->edad = 20;
        return "Mi edad es " . $this->edad;
    }
}
class Trabajador extends Persona
{
    public $puesto;
    public function presentarseComoTrabajador()
    {
        echo "Hola soy " . $this->nombre . " y soy un " . $this->puesto . "<br/>";
    }
}

$objetoAlumno = new Persona("Gefferson");

$objetoAlumno->imprimirNombre();


?>
