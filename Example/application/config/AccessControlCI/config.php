<?php 

$config['pages_public']         = [ "/publico/login", 
									"/publico/inicio",
									"/publico/patrocinadores",
									];
$config['sessions_id']          = "id_usuario"; // Este es el identificador de session que podria ser igual al ID de la base de datos de la tabla USUARIO.
$config['page_login']           = "/publico/login";
$config['process_login']        = "/publico/loginProcess";
$config['default_page_private'] = "/usuario/lista";
$config['default_page_public']  = "/publico/login";

?>