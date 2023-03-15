# pruebaphp
Formulario PHP


En que lugar se ejecuta el código PHP?
Comienza en el index.php

Como puede interactuar PHP y JAVASCRIPT?

PHP es el lado del servidor y JAVASCRIPT es parte del usuario.

Cual es la principal diferencia entre require () y require_once

Los dos cumple la misma  fucnion de importar una clase
requiere_once la ejecuta solo uan vez
require la ejecuta infinitas veces.

Como es posible exportar data en un archivo de excel?
header("Content-Type: application/xls");  

Que es una sesión?
Es la que guarda temporalmente una información, es parecia al localStorage de JAVASCRIPT.

Como se puede propagar una session_id()?
Si se especifica id, reemplazará el id de sesión actual. session_id() necesita ser llamado antes de session_start() 

Como podemos determinar si una variable tiene un valor asignado?

isset($my_var) Esto es lo que valida si la variable tiuen valor

Es posible destruir una cookie?

setcookie('nombre','',time()-100);
si

