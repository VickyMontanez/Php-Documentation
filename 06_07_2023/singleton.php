<?php
    //! STANDAR STRUCTURE OF SINGLETON

    //* trait =  es un método que permite reutilizar código funcional sin necesidad de escribir el mismo código una y otra vez.
    trait getInstance{
        //* se declara la variable estática "$intance"
        static $instance;
        //* se declara la función estática
        static function getInstance(){
            $arg = func_get_args();
            $arg = array_pop($arg);
            if (self::$instance == null) {
                self::$instance = new self(...(array) $arg);
            }
            //* se retorna la variable estática
            return self::$instance;
        }
    }

    //* Se declara la primer clase "Humano"
    class Humano{

        //* Se declara la función Construtor con las variables como parametros ya declaradas como privadas o públicas
        function __construct(private $age, public $name, public $cellphone){}

        //* se coloca el método use para utilizar el trait = USE NombreDelTrait
        use getInstance;

        //*se utiliza la función que se quiera utilizar en la clase
        public function getDatos(){
            $data = [
                $this->name,
                $this->age,
                $this->cellphone
            ];
            return $data;
        }
    }




    //* Se declara la segunda clase "Perro"
    class Macotas{

        //* Se declara la función Construtor con la variables como parametro ya declarada como privada
        function __construct(private $name){}

        //* se coloca el método use para utilizar el trait = USE NombreDelTrait
        use getInstance;

        //*se utiliza la función que se quiera utilizar en la clase
        public function getName(){
            return $this->name;
        }
    }
    
    //* NombreDeLaClase :: NombreDelTrait( $SePasanLosParametros = declarados )-> seAccedeALaFunción()
    var_dump(Humano::getInstance(["name"=>"Vicky Vanessa Montañez Molina","age"=>17, "cellphone"=> 3224543241])->getDatos());
    var_dump(Macotas::getInstance(["Gatoto, Pachito, Colanta, Morita, Sarnita"])->getName());
?>
