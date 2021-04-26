<?php
function autoLoad($class) {
    //$file = '../'.str_replace('\\', '/', $class) . '.php';
    //$file = '../gm/' . str_replace('\\', '/', $class) . '.php';
    $file = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file))
    {       
        include $file;
    }
}

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

spl_autoload_register('autoLoad');
//session_start();

$model = new model\ClickModel();
$controller = new controller\ClickController($model);
$view = new view\ClickView($controller, $model);
$URI = ltrim($_SERVER['REQUEST_URI'], '/');
if(endsWith($URI, "seo-test-url"))
{
    $controller->clicked();
}
/*if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}*/
ob_start();
$view->render();
echo ob_get_clean(); 