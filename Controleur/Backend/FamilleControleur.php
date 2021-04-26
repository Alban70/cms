<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 27/02/2018
 * Time: 13:28
 */

namespace Controleur\Backend;

use Modele\Famille;
use Modele\FamilleManager;

class familleControleur extends \Lib\Controleur
{
    protected function indexAction()
    {

        $fm = new FamilleManager();
        $all_familles = $fm->getAllFamilles();
        $data = ['all_familles' => $all_familles];
        $this->render('famille/myFamilleHome.php', $data);
    }

    protected function addAction()
    {
        /*$famille = new \Modele\Famille();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $famille->setLibelle($_POST['libelle']);
        if ($famille->getErreur() == []) {
            $fm = new \Modele\FamilleManager();
            $famille->setDate(new \DateTime('now'));
            $fm->addFamille($famille);
            header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
            exit();
        }
        }
        $data = ["erreurs" => $famille->getErreur()];
        $this->render('famille/create.html.php', $data);*/


        $this->render('famille/createFamille.html.php');






    }
    protected function editAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id=$_POST['valeur_id'];
            $fm = new \Modele\FamilleManager();
            $famille_edit = $fm->getFamilleById($id);



        }else{
            header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
            exit();
        }

        $data = ["famille_edit" => $famille_edit];
        $this->render('famille/modifier.html.php', $data);


        /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id=$_POST['valeur_id'];
            $famille = new \Modele\Famille();
            $fm = new \Modele\FamilleManager();
            $famille_edit = $fm->getFamilleById($id);



                    if ($famille->getErreur() == []) {
                        $fm = new \Modele\FamilleManager();
                        $famille->setId($famille_edit->getId());
                        //$article->setAuteur($_SESSION['auteur']);
                        $famille->setDate(new \DateTime('now'));
                        $famille->setLibelle($_POST['libelle']);
                        $famille->setActif($_POST['actif']);
                        $famille->setType($_POST['type']);
                        $famille->setStatut($_POST['statut']);

                        $fm->updateFamille($famille);
                        header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
                        exit();
                    }

        }else{
            header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
            exit();
        }

        $data = ["erreurs" => $famille->getErreur(), "famille_edit" => $famille_edit];
        $this->render('famille/modifier.html.php', $data);*/
    }
    protected function modifyAction(){
        /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $famille = new \Modele\Famille();
            $fm = new \Modele\FamilleManager();

                    if ($famille->getErreur() == []) {
                        $famille->setFamId($_POST['fam_id']);
                        //$article->setAuteur($_SESSION['auteur']);
                        $famille->setDate(new \DateTime('now'));
                        $famille->setLibelle($_POST['libelle']);
                        $famille->setActif($_POST['actif']);
                        $famille->setType($_POST['type']);
                        $famille->setStatut($_POST['statut']);

                        $fm->updateFamille($famille);
                        header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
                        exit();
                    }

        }else{
            header('Location: ' . \Lib\Application::$racine . 'theme_adminPo/web/famille');
            exit();
        }*/

        $id = $_POST['valeur_id'];
        $fam = new familleManager();
        $famille_edit = $fam->getFamilleById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        }
        $data = ["famille_edit" => $famille_edit];
        $this->render('famille/modifyFamille.html.php', $data);
    }

    protected function deleteAction()
    {
        $id = $_POST['valeur_id'];
        $fam = new FamilleManager();
        $famille = $fam->getFamilleById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($famille->getErreur() == []) {
                $fam->deleteFamille($famille);
                header('Location: ' . \Lib\Application::$racine . 'famille');
                exit();
            }
        }
    }
    protected function searchAction()
    {
        $famille = new Famille();
        $fam = new FamilleManager();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($famille->getErreur() == []) {
                $famille->setLibelle('%'.$_POST['libelle'].'%');
                $famille->setType('%'.$_POST['type'].'%');
                $fam = new FamilleManager();
                $all_familles = $fam->filtreFamille($famille);
            }
            $data = ['all_familles' => $all_familles];
            $this->render('famille/myFamilleHome.php', $data);
        }

    }
}