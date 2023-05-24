<?php
    /* Clase User */
    class user {
        /* Se hace un variable estatica que tenga la configuración NORMAL de config Js */
        static $config = array(
            'http'=> ['header'=> "Content-Type: application/json"]
        );
        /* Atributo público */
        public $usuario;
        /* Atributo protegido */
        protected $constrasena;
        /* La función constructor se utiliza para asignarle a las variables instancias*/
        public function __construct($usuario, $constrasena) {
            /* Los valores se pasan como argumentos al constructor y se asignan a las variables correspondientes */
            $this -> usuario = $usuario;
            $this -> constrasena = $constrasena;
        }

        public function getUser() {
            self:: $config["http"]["method"] = "GET";
            $res = file_get_contents('http://localhost:4000/usuarios?usuario='.$this -> usuario.'&contrasena='.$this -> constrasena, false, stream_context_create(self::$config));
            return($res);
        }
    }

?>
