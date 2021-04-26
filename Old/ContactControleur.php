<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 27/02/2018
 * Time: 13:28
 */

namespace Controleur\Frontend;

use Lib\Application;
use Modele\Auteur;
use Modele\Contact;
use Modele\ContactManager;
use Modele\Coordonnees;
use Modele\CoordonneesManager;
use Modele\Membre;
use Modele\AuteurManager;
use Modele\MembreManager;
use Modele\Commande;
use Modele\CommandeManager;
//use Tools\Token_Form;

class TestControleur extends \Lib\Controleur
{
    protected function indexAction()
    {
var_dump('hello');
        //$cm = new FamilleManager();
        //$familles = $cm->getAllFamilles();
        //$data = ['familles' => $familles];
        //$this->render('famille/listeFamille.html.php', $data);
        $this->render('contact/myContactconnexion.html.php');
    }

    protected function addAction()
    {
        $auteur = new Auteur;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //if (!isset($_SESSION['token'])) {
                //header('Location: ' . \Lib\Application::$racine . 'theme_membresPo/web/connexion');
                //exit();
            //} else {

                //if ($_POST['token'] == $_SESSION['token'] && time() - $_SESSION['token_time'] <= Application::TIME_STORE_TOKEN) {

                    $membre = new Membre;
                    $mm = new MembreManager();
                    $membre->setNom($_POST['ste']);

                    $contact = new Contact;
                    $cm = new ContactManager();
                    $contact->setNom($_POST['nom']);
                    $contact->setPrenom($_POST['prenom']);

                    $coordonnees = new Coordonnees();
                    $coorm = new CoordonneesManager();
                    $coordonnees->setTel($_POST['tel']);
                    $coordonnees->setEmail($_POST['email']);


                    $auteur->setNom($_POST['login']);
                    $auteur->setPass($_POST['pwd']);

                    $am = new AuteurManager();
                    $am->getAuteurByLogin($auteur);
                    if ($am->getAuteurByLogin($auteur)!== false) {
                        $auteur->setErreur(['Login déjà pris. Essayez en un autre']);
                    }
                    $commande = new Commande();
                    $cc = new CommandeManager();
                    $commande->setLibelle('Demande de contact');

                    if ($auteur->getErreur() == []) {
                        //$am->insertAuteur($auteur);
                        //$am->insertAuteur($auteur, $membre, $contact, $coordonnees);
                        $am->insertAuteurCommandeTest($auteur, $membre, $contact, $coordonnees, $commande);
                        //$cc->addCommandTest($auteur, $membre, $contact, $coordonnees, $commande);
                        //$this->connectAction($auteur);
                        header('Location: ' . \Lib\Application::$racine . 'connexion');
                        exit();

                    }
                }

        //$token = $this->token_form();
        $this->render('test/myContactconnexion.html.php', [/*"token" => $token,*/ "erreurs" => $auteur->getErreur()]);
    }
}



