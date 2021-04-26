<?php
/**
 * Created by PhpStorm.
 * User: Alban
 * Date: 28/03/2018
 * Time: 18:56
 */

namespace Modele;

use Lib\EntiteManager;
use \PDO;

class EditoManager extends EntiteManager
{
    public function getAllEdito()
    {
        $sql = 'SELECT * FROM edito GROUP BY id';

        $result = $this->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Edito::class);
        return $result->fetchAll();

    }
    public function insertEdito(Edito $edito){

        $sql = 'INSERT INTO edito(titre, contenu, image, dateCreation, publier, slug, contact_id, user_id, type, statut, actif, fam_id) VALUES(?, ?, NULL, NOW(),?, NULL, NULL , NULL,?, ?, NULL, ?)';
        $result = $this->prepare($sql);
        $result->bindValue(1, $edito->getTitre());
        $result->bindValue(2, $edito->getContenu());
        $result->bindValue(3, $edito->getPublier());
        $result->bindValue(4, $edito->getType());
        $result->bindValue(5, $edito->getStatut());
        $result->bindValue(6, $edito->getFamId());
        $result->execute();
        //$soc_id = $this->getBdd()->lastInsertId();
    }
    public function getEditoById($id)
    {
        $sql = 'SELECT  * FROM edito
            WHERE id = ?';
        $result =  $this->prepare($sql);
        $result->execute([$id]);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Edito::class);
        $edito = $result->fetch();
        return $edito;
    }
    public function filtreEdito(Edito $edito)
    {
$titre = $edito->getTitre();
        $type = $edito->getType();
        $sql = 'SELECT  * FROM edito
            WHERE titre LIKE :titre AND type LIKE :type';
        $result =  $this->prepare($sql);
        $result->execute([':titre'=>$titre, ':type'=>$type]);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Edito::class);
        $all_editos = $result->fetchAll();
        return $all_editos;
    }
    public function updateEdito(Edito $edito){

        $sql = 'UPDATE edito SET titre = ?, contenu = ? WHERE id = ?';
        $result = $this->prepare($sql);
        $result->execute([$edito->getTitre(), $edito->getContenu(), $edito->getId()]);
    }

    public function deleteEdito(Edito $edito){

        $sql = 'DELETE FROM edito WHERE id = ?';
        $result = $this->prepare($sql);
        $result->execute([$edito->getId()]);
    }
    //public function updateArticle(Article $article){
        //$sql = 'UPDATE article SET titre = ?, contenu = ?, image = ?, thumbnail = ?, date = ? ,publier = ? WHERE id = ?';
        //$result = $this->prepare($sql);
        //$result->execute([$article->getTitre(), $article->getContenu(), $article->getImage()->getFilename(), $article->getThumbnail()->getFilename(),  $article->getDate()->format('Y-m-d H:i:s'), $article->getPublier(), $article->getId()]);
    //}
}