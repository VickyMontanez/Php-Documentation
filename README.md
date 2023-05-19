```php
<?php
    header("Content-type:application/json; charset:UTF-8");
	$_DATA = json_decode(file_get_contents("php://input"), true);
	$_METHOD = $_SERVER["REQUEST_METHOD"];
	$_HEADERS = apache_request_headers();
	var_dump($_HEADERS);
?>
```

```html
<html>
      ["Host"]=> 
      string(9) "localhost"
      ["Connection"]=>
      string(10) "keep-alive"
      ["Cache-Control"]=>
      string(9) "max-age=0"
      ["sec-ch-ua"]=>
      string(65) ""Google Chrome";v="113", "Chromium";v="113", "Not-A.Brand";v="24""
      ["sec-ch-ua-mobile"]=>
      string(2) "?0"
      ["sec-ch-ua-platform"]=>
      string(7) ""Linux""
      ["Upgrade-Insecure-Requests"]=>
      string(1) "1"
      ["User-Agent"]=>
      string(101) "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36"
      ["Accept"]=>
      string(135)   "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7"
      ["Sec-Fetch-Site"]=>
      string(4) "none"
      ["Sec-Fetch-Mode"]=>
      string(8) "navigate"
      ["Sec-Fetch-User"]=>
      string(2) "?1"
      ["Sec-Fetch-Dest"]=>
      string(8) "document"
      ["Accept-Encoding"]=>
      string(17) "gzip, deflate, br"
      ["Accept-Language"]=>
      string(14) "en-US,en;q=0.9"
</html>
```



# Headers PHP

#### Los encabezados de una solicitud HTTP, son componentes de información que se incluyen en una solicitud HTTP enviada desde un cliente a un servidor. 

##### Estos encabezados proporcionan detalles adicionales sobre la solicitud y ayudan a definir cómo debe ser manejada por el servidor.

![](https://www.seobility.net/es/wiki/images/f/f5/Cabecera-http.png)

1. Host: Especifica el nombre de dominio del servidor al que se envía la solicitud.

2. Connection: Indica si la conexión entre el cliente y el servidor se mantendrá abierta después de completar la solicitud (Keep-alive : Controla el tiempo durante el cual una conexión persistente debe permanecer abierta.)

3. Cache-Control: Especifica las directivas de control de caché que le cliente debe seguir al almacenar en caché la respuesta.

4. sech-ch-ua: Proporciona información sobre el agente de usuario del cliente, como el navegador y la versión utilizada.

5. sech-ch-ua-mobile: Indica si el agente de usuario del cliente es una versión móvil.

6. sec-ch-ua-platform: Indica la plataforma en la que se está ejecutando el agente de usuario del cliente, en este caso, "Linux".

7. Upgrade-Insecure-Requests: Indica que el cliente desea actualizar la solicitud a una conexión segura HTTPS si el servidor lo admite.

8. User-Agent: Contiene información sobre el agente de usuario utilizado para enviar la soliciutd, incluido el navegador, la versión y el sistema operativo.

9. Accept: Especifica los tipos de contenido que el cliente puede aceptar.

10. Sec-Fetch-Site: Indica sel sitio desde el cual se realiza la solicitud.

11. Sec-Fetch-Mode: Especifica el modo en el que el cliente realiza la solicitud, en este caso, "navigate"(navegar).

12. Sec-Fetch-User: Indica si el cliente está autenticado.

13. Sec-Fetch-Dest: Indica el destino de la solicitud, en este caso, "document" (documento).

14. Accept-Encoding: Especifica los algoritmos de comprensión que el cliente puede aceptar para la respuesta.

15. Accept-Language: Indica los idiomas que el cliente puede aceptar para la respuesta.

    

    ## Ejemplo de Headers PHP

    - **Host**: localhost

      El nombre del dominio es "localhost", lo que indica que la solicitud se está realizando en el mismo equipo.

    - **Connection**: keep-alive

      Indica si la conexión entre el cliente y el servido se mantendra abierta después de complentar la solicitud, "keep-alive" significa que la conexión se mantendrá abierta.

    - **Cache-Control**: max-age=0

      "max-age=0" es la directiva sobre el control del caché, que indica que la respuesta no debe almacenarse en caché y debe solicitarse al servidor nuevamente.

    - **sec-ch-ua**: "Google Chrome";v="113", "Chromium";v="113", "Not-A.Brand";v="24"

       Proporciona información sobre el agente de usuario del cliente, es decir, indica que se está  utilizando Google Chrome (versión 113), Chromium (versión 113) y otro  navegador desconocido (versión 24).

    - **sec-ch-ua-mobile**: ?0

      "?0" significa que no es una versión móvil.

    - **sec-ch-ua-platform**: "Linux"

      Indica la plataforma en la que se está ejecutando el agente  del cliente. es decir, indica que el cliente está en un  sistema operativo Linux.

    - **Upgrade-Insecure-Requests**: 1

      "1" Indica que el cliente solicita la  actualización una conexión segura HTTPS

    - **User-Agent**: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36

      Contiene información sobre el agente de usuario utilizado para enviar la solicitud. En este caso, se utiliza Mozilla/5.0 (X11; Linux x86_64)  AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36.

    - **Accept**: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7

      Especifica los tipos de contenido que el cliente puede aceptar. En este  caso, indica que el cliente acepta HTML, XML, imágenes, etc., con  diferentes niveles de prioridad.

    - **Sec-Fetch-Site**: none

      "none" indica que la solicitud no se realiza desde un sitio específico.

    - **Sec-Fetch-Mode**: navigate

      "navigate" significa el modo ene l que el cliente realiza la solicitud, es decir, que se está navegando a una página específica.

    - **Sec-Fetch-User**: ?1

      "?1" indica que el cliente está autenticado.

    - **Sec-Fetch-Dest**: document

      "document" indica que el destino se solicita es un documento específico.

    - **Accept-Encoding**: gzip, deflate, br

      Especifica los algoritmos de compresión que el cliente puede aceptar para la respuesta, se acepta la compresión mediante gzip, deflate y br (Brotli).

    - **Accept-Language**: en-US,en;q=0.9

      Indica los idiomas que el cliente puede aceptar para la respuesta. En  este caso, se acepta el idioma inglés con una preferencia del 90%.