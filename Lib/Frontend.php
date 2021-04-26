<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 17/02/2018
 * Time: 14:55
 */
namespace Lib;
class Frontend extends \Lib\Application
{
    protected $controleur;


    public function __construct()
    {
        $this->name = 'Frontend';
        //$this->layout = 'layout.html.php';
        //$this->layout = 'layoutMembres.html.php';
        //$this->layout = 'layoutAdmin.html.php';
        $this->layout = 'layout.html.php';
        parent::__construct();
    }


    public function run()
    {
        //modif résolution des urls
        $URI = ltrim($_SERVER['REQUEST_URI'], '/');   
        //echo "base URI = $URI <br>";
        //nettoyage de l'url             
        $URI = str_replace("cms/", "", $URI);
        $URI = str_replace("Web/", "", $URI);
        $URI = explode('?', $URI)[0]; //on vire les arguments
        //$module = (isset($_GET['module'])) ? $_GET['module'] : 'Home';        
        $module = !empty($URI) ? $URI : "Home";                
        //action devrait fonctionner comme il faut à nouveau
        $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';

        //echo "module = $module <br> URI = $URI <br> action = $action <br>";
        
        try {
            $controleur = $this->getControleur($module);
            $controleur->action($action);
        } catch(HttpErrorException $e) {
            new \Controleur\Frontend\ErrorControleur($this, $e);
            exit;

        }
        

    }


}