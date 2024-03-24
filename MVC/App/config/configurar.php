<?php 
// Desarrollo 
ini_set('display_errors' ,1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Desarrollo 


define ('RUTA_APP', dirname(dirname(__FILE__)));


//-----------------CAMBIAR ESTO-----------------------------

//define ('RUTA_URL', 'http://localhost/mvc_completo_23-24');
define ('RUTA_URL', '/');
define ('RUTA_PUBLIC', RUTA_URL.'public/');

//Nombre del sitio
define ('NOMBRE_SITIO', '');

//Configuracion Base de Datos
define ('DB_HOST', '');
define ('DB_USUARIO', '');
define ('DB_PASSWORD', '');
define ('DB_NOMBRE', '');

//Tamaño paginacion
define('TAM_PAGINA', 2);