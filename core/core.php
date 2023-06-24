<?PHP

setlocale(LC_TIME, "fr_FR");
date_default_timezone_set('Europe/Paris');

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

if (array_key_exists('HTTP_ACCESS_CONTROL_REQUEST_HEADERS', $_SERVER)) {
    header('Access-Control-Allow-Headers: ' . $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']);
} else {
    header('Access-Control-Allow-Headers: origin, x-requested-with, content-type, cache-control');
}

require $_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php";

$debug = 1;
$url = (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS'])) ? 'https://' . $_SERVER['SERVER_NAME'] : 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];
$_REQUEST = !empty($_REQUEST) ? $_REQUEST : json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY) ?? [];

if (!isset($_SESSION)) {
    $session_time = 86400;
    ini_set('session.gc_maxlifetime', $session_time);
    ini_set('default_charset', 'utf-8');
    ini_set('display_errors', $debug);
    ini_set('display_startup_errors', $debug);
    ini_set('log_errors', $debug);
    ini_set('log_errors_max_len	"1024"	', $debug);
    ini_set('track_errors', $debug);
    ini_set('html_errors	', $debug);
    ini_set('xmlrpc_errors	', $debug);
    ini_set('xmlrpc_error_number', $debug);

    if ($debug)
        error_reporting(E_ALL);
    @session_start();
}