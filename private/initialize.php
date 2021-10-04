<?php
ob_start(); // turn on output buffering

date_default_timezone_set("Africa/Lagos");

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH); //modified
define("SHARED_PATH", PRIVATE_PATH . '/shared');

define("WWW_ROOT", '/cmb');

require_once('functions.php');
require_once('status_error_functions.php');
require_once('db_credentials.php');
require_once('database_functions.php');
require_once('validation_functions.php');

foreach (glob('classes/*.class.php') as $file) {
    require_once($file);
}

// Autoload class definitions
function my_autoload($class)
{
    if (preg_match('/\A\w+\Z/', $class)) {
        include('classes/' . $class . '.class.php');
    }
}
spl_autoload_register('my_autoload');

$database = db_connect();
DatabaseObject::set_database($database);

$session = new Session;
// pre_r($session);
if ($session->client_id) {
    $loggedInClient = Customer::find_by_id($session->client_id);
} elseif ($session->admin) {
    $loggedInAdmin = Admin::find_by_email($session->admin);
}
