<?php

/* METODO GET
var_dump($_GET); */

/* METODO POST */
/* var_dump($_POST); */

/*  ENVIAR ARCHIVOS
move_uploaded_file($_FILES["archivo"]["tpm_name"],"img/M1.jpg"); */


/* ENVIAR A JAVASCRIPT */
/* var_dump($_POST); */

header("Content-type:application/json; charset:UTF-8");
$_DATA = json_decode(file_get_contents("php://input"), true);
$_METHOD = $_SERVER["REQUEST_METHOD"];
$_HEADERS = apache_request_headers();
var_dump($_HEADERS);
/* echo '<a href="index.html">Atras</a>' */
?>