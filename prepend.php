<?php // prepend.php - autoprepended at the top of your tree

define('MAIN_DIR', str_replace('\\', '/', dirname(__FILE__) . '/'));
define('VIEWS_DIR', MAIN_DIR . 'app/views/');
define('ROUTE_DIR', MAIN_DIR . 'app/routes/');
?>