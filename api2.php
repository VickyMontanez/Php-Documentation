<?php
/*     class Olla {
        public $lugares;
        private $merca;
        funcion constructor con 2 guiones bajos __
        public function __construct(){

        }
         funcion destructor 
        public function __destruct(){
            echo "Se ha allanado la " .__CLASS__;
        }
        public function set_lugar(string $p1):void{
            $arg = (object) func_get_arg();
            $this->lugares = $p1;
        }
        public function get_lugar():string{
            return $this->lugares;
        }
    }

    $obj = new Olla;
 */
    function data(){
        /* var_dump — Muestra información sobre una variable */
        /* func_get_arg — Devuelve un elemento de una lista de argumentos */
        /* var_dump(func_get_arg(3)[3]); */

/*         func_get_args — Devuelve un array que se compone de una lista de argumentos de función */
        $arg = func_get_args();
        var_dump($arg);
    }

    data("Vicky",17,true,["A","B",12323324343,[2222, "vanessaa", "molina"]]);

/*     $data[3]->nombre = (string) "Vickysiiita";
    $data[3]->apellido = (string) "Montañezz";
    json_encode($data[3])
 */
?>