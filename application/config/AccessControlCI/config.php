<?php 

$config['pages_public']         = [ "/publico/login", // Estas son las paginas publicas que cualquier usuario podra ingresar  
									"/publico/inicio",
									"/publico/patrocinadores",
									];
$config['sessions_id']          = "id_usuario"; // Este es el identificador de session que podria ser igual al ID de la base de datos de la tabla USUARIO.
$config['page_login']           = "/publico/login"; // Esta es la ruta de la pagina de ingreso al sistema 
$config['process_login']        = "/publico/loginProcess"; // Esta es la ruta para el proceso del ingreso al sistema
$config['default_page_private'] = "/usuario/lista"; // Esta es la ruta de la pagina principal para los accesos privados
$config['default_page_public']  = "/publico/login"; // Esta es la ruta de la pagina principal para los accesos publicos

?>