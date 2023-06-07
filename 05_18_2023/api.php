<?php
    /* CLASES EN PHP */
    class Olla {
        public $lugares;
        private $merca;
        /* función constructor con 2 guiones bajos __ */
        public function __construct(){

        }
        /* función destructor  */
        public function __destruct(){
            echo "Se ha allanado la " .__CLASS__;
        }
        /* Un conjunto es una secuencia de valores únicos. SET se utiliza para colocar un valor a una*/
        public function set_lugar(string $p1):void{
            $arg = (object) func_get_arg();
            $this->lugares = $p1;
        }
        /* Devuelve el nombre de la clase de un objeto. GET devuelve el valor que le pidamos */
        public function get_lugar():string{
            return $this->lugares;
        }
    }

    /* Para crear una instancia de una clase, se debe usar la nueva palabra clave. Siempre se creará un objeto a menos que el objeto tenga un constructor definido que arroje una excepción en caso de error. Las clases deben definirse antes de la creación de instancias (y en algunos casos esto es un requisito). */

    $obj = new Olla;


    /* 1.PRIMER MÉTODO
    var_dump — Muestra información sobre una variable
    (similar a un TypeOf())
    func_get_arg — Devuelve un elemento de una lista de argumentos 
    al darte un parametro (3), le estoy diciendo que me traiga el elemento en la posición 3 y como es un array al colocarle [0] el elemento en la primera posición*/

    function data(){
        var_dump(func_get_arg(3)[0]);
    }
    data("Vicky",17,true,["A","B"]);


    /* 2.SEGUNDO MÉTODO
    func_get_args — Devuelve un array que se compone de una lista de argumentos de función */
    function data2(){
        $arg = func_get_args();
        var_dump($arg);
    }
    data2("Vicky",17,true,["A","B",12323324343,[2222, "vanessaa", "molina"]]);


    /* 3. TERCER MÉTODO
    array_combine — Crea un nuevo array, usando una matriz para las claves y otra para sus valores 
    cada palabra que esta en "array_combine([]) son las KEY / las LLAVES 
    Y cada dato que le ingreso a la funcion "data3()" son los VALUE / los VALORES*/
    function data3(){
        $list = func_get_args();
        $arg = array_combine(["nombre", "edad","trabajo","grupo", "besties"], $list);
        var_dump($arg);
    }
    data3("Vicky",17,"estudiooooo","sputnik",["Valee", "Dylin", "Konny", "Lupe", "Angelita", "Karoll"]);
    
    /* 4. CUARTO MÉTODO 
    dataASSOC función de un array asociativo
    array_pop — Extrae el último elemento del final del array
    json_encode — Retorna la representación JSON del valor dado 
    (pero lo lee como STRING)
    El operador de doble flecha, =>, se utiliza como mecanismo de acceso a las matrices.*/
    function dataASSOC(){$list =  func_get_args();
        $list = (object) array_pop($list); var_dump(json_encode($list));
    }
    dataASSOC(["nombre"=>"Vicky", "Apellido"=>"Montañez", "Mascotas"=>["Gatoto", "Pachito", "Colanta", "Lunarcito", "Oreo", "Kokoro"]]);
?>