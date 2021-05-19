<?php 
/*
 * Definition of important constants 
*/ 
define('URL','http://localhost/fitodata/');

/*
 * Define name project
 */
define('NAME_PROJECT','FitoData');

/*
* Define system timezone
*/
date_default_timezone_set('America/Guayaquil');

/* 
* define the language
*/
define('LANG', 'es');

/*
* Parent and child directory paths
*/
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd().DS);
define('APP', ROOT.'app'.DS);
define('LIBS', APP.'libs'.DS);
define('CONFIG', APP.'config'.DS);
define('CONTROLLERS', APP.'controllers'.DS);
define('MODELS', APP.'models'.DS);
define('LANGUAGES', APP.'languages'.DS);


define('TEMPLATE', ROOT.'template'.DS);
define('INCLUDES', TEMPLATE.'includes'.DS);
define('VIEWS', TEMPLATE.'views'.DS);
define('MODULOS_ADMIN', TEMPLATE.'modulos_admin'.DS);
define('MODULOS_PAGE', TEMPLATE.'modulos_page'.DS);

/*
* Paths with absoluted URL
*/
define('ASSETS', URL.'assets/');
define('CSS', ASSETS.'css/');
define('FAVICON', ASSETS.'favicon/');
define('FONTS', ASSETS.'fonts/');
define('IMAGES', ASSETS.'images/');
define('JS', ASSETS.'js/');
define('PLUGINS', ASSETS.'plugins/');

/* 
 * Database Configuration
*/
define('DB_HOST','localhost');
define('DB_NAME','');
define('DB_USER','');
define('DB_PWD','');
define('DB_CHARSET','');
/*
* Email configuration
*/
define('EMAIL_SENDER', '');
define('EMAIL_USER', '');
define('EMAIL_PASSWORD', '');
define('EMAIL_HOST', '');
define('EMAIL_PORT', '587');