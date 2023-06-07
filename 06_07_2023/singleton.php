<?php
    //* declare(strict) verifica estrictamente los tipos de datos  que entran en funciones y métodos para que coincidan.
    declare(strict_types=1);

    class Humano{

        //* Se hace una variable estatica para Instanciar
        //? Una instancia es la representación de la clase

        static $instance;
        public $name;
        private $age;

        function __construct($name, int $age){
            $this->name = $name;
            $this->age = $age;
        }

        //! Se coloca otra función estatica debajo del constructor con el mismo nombre de la variable

        static function getInstance(){
            $arg = func_get_args();
            $arg = array_pop($arg);
            //* self se utiliza para acceder a todos los métodos y variables de una clase sin tener que instanciarla manualmente

            //? SI(la variable $instance de la clase es NUll), entonces, Defina la varianble con una INSTANCIA
            if (self::$instance == null) {
                // self::$instance = new Humano("Vickysiiiiitaaa", 22 );

                //? SI(la variable $instance de la clase es NUll), Definala como una instancia = "new self", desectructure sus argumentos "...", paselos como array "(array)" y devuelva el último "array_pop" elemento del array "func_get_args"
                self::$instance = new self(...(array) $arg);

            }
            return self::$instance;
        }

        public function getName(){
            return $this->name;
        }
    
    }

    //! Para acceder a un método, PRIMERO se debe acceder al método estático de la Instancia y LUEGO " -> " entra al método
    
    // var_dump(Humano::getInstance()->getName());

    var_dump(Humano::getInstance(["name"=>"Vickysitaaa Vanesssaa", "age"=> 17])-> getName());
?>