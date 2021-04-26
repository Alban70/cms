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

class EditoControleur extends \Lib\Controleur
{
    protected function indexAction()
    {
        $ed = new EditoManager();
        $all_editos = $ed->getAllEdito();
        $data = ['all_editos' => $all_editos];
        $this->render('editoBE/myEditoBEhome.php', $data);

    }
    protected function editAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


//var_dump($_POST);

            $edito = new Edito();
            $ed = new EditoManager();
            $edito->setTitre($_POST['titre']);
            //$edito->setContenu($_POST['contenu']);
            $edito->setType('edito');
            $edito->setPublier(1);

            //$edito->getFam_id($_POST['famille']);

            //$famille2 = new Famille();
            //$fam2 = new FamilleManager();
            //$famille2 = $fam2->getFamilleById($_POST['famille']);



            //$famille2 = $fam2->setFamille($_POST['famille']);

            //$famille2 = new Famille();
            //$fam2 = new FamilleManager();

            //$famille2 = $fam2->getFamilleById($famille2->getFam_id());

            //$famille2 = $fam2->getFamilleById($_POST['famille']);
            //$edito->setFam_id($famille2->getFam_id());
            //$edito->setLibelle($famille2->getLibelle());


            //$famille2->setFamille($_POST['famille']);
            //$edito->setFamId($fam2->getFamilleById($famille2->getFam_id()));
            //$edito->setType(($fam2->getFamilleById($famille2->libelle()));

            //$fam2 = new FamilleManager();
            //$edito->getFamillesById($famille['fam_id']);
            //$edito->setFamId($fam2>getFamilleById($famille->getFam_id()));
            //$edito->setFamId($famille['fam_id']);

            //$edito->setFamId($fam2->getFamilleById($famille->getFam_id()));



            //$familles = new Famille();
            //$fam = new FamilleManager();
            //$familles = $fam->getAllFamilles($familles);

            if ($edito->getErreur() == []) {
                $ed->insertEdito($edito);
                //header('Location: ' . \Lib\Application::$racine . 'connexion');
                //header('Location: ' . \Lib\Application::$racine . 'edito/index');
                //exit();
            }
            //$data = ['edito' => $edito, 'famillee' => $familles];
            $data = ['edito' => $edito];
            $this->render('EditoBE/createEdito.html.php', $data);
            //$this->render('EditoBE/myEditoBEhome.php', [/*"token" => $token,*/ "erreurs" => $edito->getErreur()]);
        }

    }
    protected function addAction()
    {
        /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $edito = new Edito();
            $ed = new EditoManager();
            $edito->setTitre($_POST['titre']);
            //$edito->setContenu($_POST['contenu']);
            $edito->setType('edito');
            $edito->setPublier(1);
            if ($edito->getErreur() == []) {
                $ed->insertEdito($edito);
                //header('Location: ' . \Lib\Application::$racine . 'connexion');
                header('Location: ' . \Lib\Application::$racine . 'edito/index');
                exit();
            }
        }
        $this->render('EditoBE/createEdito.html.php');*/


$this->render('EditoBE/createEdito.html.php');

    }
    protected function modifyAction()
    {
        $id = $_POST['valeur_id'];
        //$edito_edit = new Edito();
        $ed = new EditoManager();
        $edito_edit = $ed->getEditoById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    /*if ($edito_edit->getErreur() == []) {
                        //$edito = new Edito();
                        //$ed = new EditoManager();
                        //$edito = $ed->setId($edito_edit->getId());
                        //$edito->setTitre($edito_edit->getTitre());
                        //$edito = $ed->setContenu($edito_edit->getContenu());
                        //$edito->setId($edito_edit->getTitre());
                        //$edito->setId($edito_edit->getContenu());
                        //var_dump($id);

                        /*if (isset($_POST['publier'])) {
                            $edito->setPublier(1);
                        } else {
                            $edito->setPublier(0);
                        }*/

                        //$ed->updateEdito($edito);
                        //header('Location: ' . \Lib\Application::$racine . 'edito/index');
                        //exit();*/
                    }
            //$token = $this->token_form();
            //$data = ["erreurs" => $edito->getErreur(), "edito" => $edito];
            $data = ["edito_edit" => $edito_edit];
            $this->render('EditoBE/modifyEdito.html.php', $data);
                }

    protected function deleteAction()
    {
        $id = $_POST['valeur_id'];
        //$edito_edit = new Edito();
        $ed = new EditoManager();
        $edito = $ed->getEditoById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($edito->getErreur() == []) {
                //$edito = new Edito();
                //$ed = new EditoManager();
                //$edito = $ed->setId($edito_edit->getId());
                //$edito->setTitre($edito_edit->getTitre());
                //$edito = $ed->setContenu($edito_edit->getContenu());
                //$edito->setId($edito_edit->getTitre());
                //$edito->setId($edito_edit->getContenu());
                //var_dump($id);

                /*if (isset($_POST['publier'])) {
                    $edito->setPublier(1);
                } else {
                    $edito->setPublier(0);
                }*/
                $ed->deleteEdito($edito);
                header('Location: ' . \Lib\Application::$racine . 'edito');
                exit();
            }
        }
        //$token = $this->token_form();
        //$data = ["erreurs" => $edito->getErreur(), "edito" => $edito];
        //$data = ["edito_edit" => $edito_edit];
        //$this->render('EditoBE/modifyEdito.html.php', $data);
    }
    protected function searchAction()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $edito = new Edito();
            $ed = new EditoManager();
            //$edito->setTitre($_POST['titre']);
            //$edito->setType($_POST['type']);
            //$edito->setPublier(1);
            if ($edito->getErreur() == []) {

                $edito->setTitre('%'.$_POST['titre'].'%');
                $edito->setType('%'.$_POST['type'].'%');

                //var_dump($edito);




                //$all_editos = new Edito();
                //var_dump($all_editos);
                $ed = new EditoManager();

                //$all_articles_nopub = $am->getArticleNoPubByAuteur($auteur);

                $all_editos = $ed->filtreEdito($edito);

                //$ed->filtreEdito($edito);
                //$all_editos->setTitre($all_editos->getTitre());
                //$all_editos->setType($all_editos->getType());

//var_dump($all_editos);
                //$Titre = $_POST['Titre'];

                //$search = '%'.$search.'%';
                //$Titre = '%'.$edito->getTitre().'%';
                //$Type = '%'.$edito->getType().'%';



                //header('Location: ' . \Lib\Application::$racine . 'connexion');
                //header('Location: ' . \Lib\Application::$racine . 'edito');
                //exit();
            }
            //$ed = new EditoManager();
            //$all_editos = $ed->getAllEdito();
            $data = ['all_editos' => $all_editos];
            $this->render('editoBE/myEditoBEhome.php', $data);
        }

    }
}