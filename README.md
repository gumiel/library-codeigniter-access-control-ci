# Libreria Access Control para Codeigniter
Es una libreria para el control de accesos.<br>
Valida los accesos de los usuarios al sistma verificando si la session de usuario fue creada.<br>
Esta validacion hace transparente al desarrollo del sistema sin tener que preocuparse por la validacion de sessiones.<br> 


## ESTRUCTURA DE DIRECTORIO NUEVOS Y ARCHIVOS
Estos son los nuevos archivos que se crearon y se modificaron. Estos archivos son necesarios para la libreria<br>
```
application/
----config/
--------AccessControlCI/
------------config.php
--------config.php
--------hooks.php
----hooks/
--------AccessControlCI.php
```

## INSTALACION
Paso 1.- Para empezar se tiene que activar los HOOKS en el archivo "config.php" de la carpeta "/config"<br>
```
$config['enable_hooks'] = TRUE;
```
Paso 2.- Despues copiar el archivo "AccessControlCI.php" en la carpeta "/application/hooks" que es donde esta la logica de la libreria.<br>
Paso 3.- Agregar un nuevo hoook en el archivo "hooks.php" este archivo tiene el siguiente codigo.<br>
```
$hook['post_controller_constructor'] = array(
                                'class'    => 'AccessControlCI',
                                'function' => 'checkLogin',
                                'filename' => 'AccessControlCI.php',
                                'filepath' => 'hooks'
                                );
```
Paso 4.- Despues copiar la carpeta y el archivo "/AccessControlCI/config.php" en la carpeta "application/config". Este es la configuracion de la libreria<br>
Paso 5.- Configurar con los parametros que necesite como en el ejemplo
 ```
$config['pages_public']         = [ "/publico/login", // Estas son las paginas publicas que cualquier usuario podra ingresar  
								"/publico/inicio",
								"/publico/patrocinadores",
								];
$config['sessions_id']          = "id_usuario"; // Este es el identificador de session que podria ser igual al ID de la base de datos de la tabla USUARIO.
$config['page_login']           = "/publico/login"; // Esta es la ruta de la pagina de ingreso al sistema 
$config['process_login']        = "/publico/loginProcess"; // Esta es la ruta para el proceso del ingreso al sistema
$config['default_page_private'] = "/usuario/lista"; // Esta es la ruta de la pagina principal para los accesos privados
$config['default_page_public']  = "/publico/login"; // Esta es la ruta de la pagina principal para los accesos publicos
 ```

