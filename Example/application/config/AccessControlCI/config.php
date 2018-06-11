<?php 

$config['pages_public']         = [ "/publico/login", 
									"/publico/payment",
									];
$config['sessions_id']          = "id_usuario"; // Este es el identificador de session que sera igual al ID de la base de datos de la tabla USUARIO
$config['page_login']           = "/publico/login";
$config['process_login']        = "/publico/loginProcess";
$config['default_page_private'] = "/usuario/lista";
$config['default_page_public']  = "/publico/login";
Queria compartirles una pequeña libreria de codeigniter que cree para realizar consultas comunes a base de datos.
Es una estructura que propongo para poder agilizar las consultas manteniendo la estructura MVC.
Agrege tambien Snippets para sublime text3 para ayudar al desarrollo. 
Estoy probando en otro proyecto libre mas grande y si encuentro algunos cambios y mejoras las estare subiendo
Cualquier consulta o duda podrian hablarme al hangout prez.gumiel@gmail.com o al mismo correo
La libreria es https://github.com/gumiel/library-codeigniter-generic-model
?>