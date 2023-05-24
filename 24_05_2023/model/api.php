<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    function autoload($class){
        require __DIR__.'/entidad/'.$class.'.php';
    };
    spl_autoload_register('autoload');

    $res = new user("marcos",123);
    echo $res->getUser();
?>