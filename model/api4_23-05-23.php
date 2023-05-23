<?php
/* include, require, include_once y require_once */
/* Son funciones que se utilizan para incluir
archivos externos en un programa. */

/* INCLUDE / INCLUDE_ONCE */
include "entidad/info.php";
/* include puede incluir el mismo archivo varias veces */
include_once "entidad/user.php";
/* asegura que el archivo solo se incluya una vez en el programa. */

/* REQUIRE / REQUIRE_ONCE */
require "entidad/info.php";
/* require es idéntico a include excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras que include sólo emitirá una advertencia (E_WARNING) lo cual permite continuar el script.  */
require_once "entidad/user.php";
/* NO SE INCLUYE porque ya se llamo una vez */


?>