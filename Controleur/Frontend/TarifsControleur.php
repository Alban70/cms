<?php
/**
 * Created by PhpStorm.
 * User: Alban
 * Date: 28/03/2018
 * Time: 18:54
 */

namespace Controleur\Frontend;
use Modele\Article;
use Modele\ArticleManager;
use Modele\Auteur;
use Modele\Comligne;
use Modele\ComligneManager;
use Modele\Contact;
use Modele\ContactManager;
use Modele\Coordonnees;
use Modele\CoordonneesManager;
use Modele\Membre;
use Modele\AuteurManager;
use Modele\MembreManager;
use Modele\Commande;
use Modele\CommandeManager;
use Modele\Commligne;
use Modele\CommligneManager;

class TarifsControleur extends \Lib\Controleur
{
    protected function indexAction()
    {
        $articleCm = new Article();
        $amCm = new ArticleManager();
        $articleCm->setType('contactManager');

        $articleV = new Article();
        $amV = new ArticleManager();
        $articleV->setType('vente');

        $articleM = new Article();
        $amM = new ArticleManager();
        $articleM->setType('marketing');

        $articleSc = new Article();
        $amSc = new ArticleManager();
        $articleSc->setType('serviceClient');

        $articleG = new Article();
        $amG = new ArticleManager();
        $articleG->setType('gestion');


        $typeCm = $amCm->getArticleByTypeCM($articleCm);
        //var_dump($typeCm);
        $typeV = $amV->getArticleByTypeVente($articleV);
        $typeM = $amM->getArticleByTypeMarketing($articleM);
        $typeSc = $amSc->getArticleByTypeServiceClient($articleSc);
        $typeG = $amG->getArticleByTypeGestion($articleG);
        $data = ['typeCm' => $typeCm, 'typeV' => $typeV, 'typeM' => $typeM, 'typeSc' => $typeSc, 'typeG' => $typeG];
        //$data = ['type_cm' => $typeCm];
        //var_dump($data);
        //$this->render('tarifs/myTarifs.html.php', $data);
        $this->render('tarifs/myTarifs.html.php', $data);

    }
    /*protected function modifyAction(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        }
    }*/
    protected function addAction()
    {
        $auteur = new Auteur;
        var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            var_dump($_POST);
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
            $commande->setLibelle('Devis abonnement logiciels');
            $commande->setType('Devis');
            $commande->setStatut('Encours');

            $comLigneCm = new Comligne();
            $clmCm = new ComligneManager();
            $comLigneCm->setQte($_POST['nbCm']);

            $comLigneV = new Comligne();
            $clmV = new ComligneManager();
            $comLigneV->setQte($_POST['nbVente']);

            $comLigneM = new Comligne();
            $clmM = new ComligneManager();
            $comLigneM->setQte($_POST['nbMarketing']);

            $comLigneSc = new Comligne();
            $clmSc = new ComligneManager();
            $comLigneSc->setQte($_POST['nbSc']);

            $comLigneG = new Comligne();
            $clmG = new ComligneManager();
            $comLigneG->setQte($_POST['nbGestion']);

            $articleCm = new Article();
            //$amCm = new ArticleManager();
            //$articleCm->setType('contactManager');
            $articleCm->setArticleId($_POST['cm_id']);
            $articleCm->setLibelle($_POST['libelleCm']);
            $articleCm->setPrixHT($_POST['prix_id']);
            //$famille->setLibelle($_POST['libelle']);

            $articleV = new Article();
            //$amV = new ArticleManager();
            //$articleV->setType('vente');
            $articleV->setArticleId($_POST['vente_id']);
            $articleV->setLibelle($_POST['libelleV']);
            $articleV->setPrixHT($_POST['prixVht']);

            $articleM = new Article();
            //$amM = new ArticleManager();
            //$articleM->setType('marketing');
            $articleM->setArticleId($_POST['marketing_id']);
            $articleM->setLibelle($_POST['libelleM']);
            $articleM->setPrixHT($_POST['prixMht']);

            $articleSc = new Article();
            //$amSc = new ArticleManager();
            //$articleSc->setType('serviceClient');
            $articleSc->setArticleId($_POST['sc_id']);
            $articleSc->setLibelle($_POST['libelleSc']);
            $articleSc->setPrixHT($_POST['prixScht']);

            $articleG = new Article();
            //$amG = new ArticleManager();
            //$articleG->setType('gestion');
            $articleG->setArticleId($_POST['gestion_id']);
            $articleG->setLibelle($_POST['libelleG']);
            $articleG->setPrixHT($_POST['prixGht']);



            //$typeCm = $amCm->getArticleByVente_id($articleCm);
            //$typeV = $amV->getArticleByVente_id($articleV);
            //$typeM = $amM->getArticleByMarketing_id($articleM);
            //$typeSc = $amSc->getArticleByTypeServiceClient($articleSc);
            //$typeG = $amG->getArticleByGestion_id($articleG);
            //$data = ['articleCm' => $articleCm, 'articleV' => $articleV, 'articleM' => $articleM, 'articleSc' => $articleSc, 'articleG' => $articleG];
            $articles = ['articleCm' => $articleCm, 'articleV' => $articleV, 'articleM' => $articleM, 'articleSc' => $articleSc, 'articleG' => $articleG];
            $comLigne = ['comLigneCm' => $comLigneCm, 'comLigneV' => $comLigneV, 'comLigneM' => $comLigneM, 'comLigneSc' => $comLigneSc, 'comLigneG' => $comLigneG];




            if ($auteur->getErreur() == []) {
                //$am->insertAuteur($auteur);
                //$am->insertAuteur($auteur, $membre, $contact, $coordonnees);
                $am->addCommandTarifs($commande, $articles, $comLigne);
                //$cc->addCommandTest($auteur, $membre, $contact, $coordonnees, $commande);
                //$this->connectAction($auteur);
                header('Location: ' . \Lib\Application::$racine . 'connexion/tarifs');
                exit();

            }
        }

        //$token = $this->token_form();
        $this->render('tarifs/myTarifs.html.php', [/*"token" => $token,*/ "erreurs" => $auteur->getErreur()]);
    }
}