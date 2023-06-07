<!-- C R U D  Y  F A C T U R A D O R A  -->
<?php
    echo "Datos en get \n"."<br>";
    print_r($_GET);
     /* Es más vulnerable ya que envía la data por encima */
    echo "<br>";

    echo "Datos en post \n"."<br>";
    print_r($_POST);
    /* Envia la dat por debajo */
?>