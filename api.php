<?php
/* Pasar a pdf con el header
header("Content-type:application/pdf")
echo 'nombre: Vicky Montañez';
echo 'nombre: Vicky Montañez';

Pasar a json con el header 
header("Content-type:application/json; charset:UTF-8");
Definir una variable
$nombre = (string) "Vickysiiitaa";
Ejecutar la variable
echo <<<JSON
    {
        "nombre": '${nombre}'
    }
JSON;
Definir un objeto  CORRECTAMENTE
Definimos una variable como un objeto y se convierte en ARRAY
$obj =(object)[];

push o acceder a un objeto con "->"
$obj->nombre = (string) "Vicky";
$obj->apellido = (string) "Montañez";
$obj->edad = (integer) 17;
$obj->banda = (string) "(G)I-DLE";
$obj->año = (integer) 2023;

SE IMPRIME COMO JSON LA VARIABLE
echo json_encode($obj); */
?>