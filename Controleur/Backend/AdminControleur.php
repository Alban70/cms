<?php
/**
 * Created by PhpStorm.
 * User: Alban
 * Date: 28/03/2018
 * Time: 18:54
 */

namespace Controleur\Backend;
use Modele\Edito;
use Modele\Famille;
use \Modele\EditoManager;
use Modele\FamilleManager;

class AdminControleur extends \Lib\Controleur
{
    protected function indexAction()
    {


    }
    protected function editAction()
    {


    }
    protected function addAction()
    {


    }
    protected function modifyAction()
    {

}
    protected function addeditoAction()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $edito = new Edito();
            $ed = new EditoManager();
            $edito->setTitre($_POST['titre']);
            $edito->setContenu($_POST['contenu']);
            $edito->setType('edito');
            $edito->setPublier(1);
            if ($edito->getErreur() == []) {
                $ed->insertEdito($edito);
                //header('Location: ' . \Lib\Application::$racine . 'connexion');
                header('Location: ' . \Lib\Application::$racine . 'edito');
                exit();
            }
        }
        //$this->render('EditoBE/createEdito.html.php');

    }
    protected function modifyeditoAction()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $edito = new Edito();
            $ed = new EditoManager();
            $edito->setId($_POST['id']);
            $edito->setTitre($_POST['titre']);
            $edito->setContenu($_POST['contenu']);
            //$edito->setType('edito');
            //$edito->setPublier(1);
            if ($edito->getErreur() == []) {
                $ed->updateEdito($edito);
                //header('Location: ' . \Lib\Application::$racine . 'connexion');
                header('Location: ' . \Lib\Application::$racine . 'edito');
                exit();
            }
        }
        //$this->render('EditoBE/createEdito.html.php');

    }
    protected function addfamilleAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $famille = new Famille();
            $fam = new FamilleManager();
            $famille->setLibelle($_POST['libelle']);
            $famille->setType($_POST['type']);
            if ($famille->getErreur() == []) {
                $fam->insertFamille($famille);
                header('Location: ' . \Lib\Application::$racine . 'famille');
                exit();
            }
        }

    }
    protected function modifyfamilleAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $famille = new Famille();
            $fam = new FamilleManager();
            $famille->setFamId($_POST['id']);
            $famille->setLibelle($_POST['libelle']);
            $famille->setType($_POST['type']);
            if ($famille->getErreur() == []) {
                $fam->updateFamille($famille);
                header('Location: ' . \Lib\Application::$racine . 'famille');
                exit();
            }
        }

    }
}