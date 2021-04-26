<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 27/02/2018
 * Time: 13:18
 */

namespace Modele;
use Lib\EntiteManager;
use \PDO;

class FamilleManager extends EntiteManager
{
    public function getAllFamilles()
    {

        $sql = 'SELECT * FROM famille GROUP BY fam_id ';
        $result=$this->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Famille::class);
        return $result->fetchAll();

    }

    /*public function addFamille(Famille $famille)
{
    $sql = 'INSERT INTO famille (libelle, actif, dateCreation, type, statut)
                        VALUES (?, ?, ?, ?, ?)';
    $result = $this->prepare($sql);
    $result->execute([$famille->getLibelle(), $famille->getActif(), $famille->getDate()->format('Y-m-d H:i:s'), $famille->getType(), $famille->getStatut()]);
    //$article->setSlug($article->getTitre(),$this->getBdd()->lastInsertId());

}*/
    /*public function addFamille(Famille $famille)
    {
        $sql = 'INSERT INTO famille (libelle, dateCreation)
                        VALUES (?, ?)';
        $result = $this->prepare($sql);
        $result->execute([$famille->getLibelle(), $famille->getDate()->format('Y-m-d H:i:s')]);
    }*/



    public function getFamilleById($id){

        $sql = 'SELECT  * FROM famille
            WHERE fam_id = ?';
        $result =  $this->prepare($sql);
        $result->execute([$id]);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Famille::class);
        $famille = $result->fetch();
        return $famille;
    }
    /*public function getByFamille(Famille $famille){
        $sql = 'SELECT  * FROM famille
            WHERE fam_id = ?';
        $result = $this->prepare($sql);
        $result->execute([$famille->getLibelle(), $famille->getActif(), $famille->getDate()->format('Y-m-d H:i:s'), $famille->getType(), $famille->getStatut(), $famille->getFamId()]);
    }*/

    public function insertFamille(Famille $famille){

        $sql = 'INSERT INTO famille(libelle, actif, dateCreation, type, statut) VALUES(?, NULL, NOW(),?, NULL)';
        $result = $this->prepare($sql);
        $result->bindValue(1, $famille->getLibelle());
        $result->bindValue(2, $famille->getType());
        $result->execute();
        //$soc_id = $this->getBdd()->lastInsertId();
    }


    /*public function updateFamille(Famille $famille){
    $sql = 'UPDATE famille SET libelle = ?, actif = ?, dateCreation = ?, type = ?, statut = ? WHERE fam_id = ?';
    $result = $this->prepare($sql);
    $result->execute([$famille->getLibelle(), $famille->getActif(), $famille->getDate()->format('Y-m-d H:i:s'), $famille->getType(), $famille->getStatut(), $famille->getFamId()]);
}*/

    public function updateFamille(Famille $famille){
   $sql = 'UPDATE famille SET libelle = ?, actif = ?, type = ?, statut = ? WHERE fam_id = ?';
   $result = $this->prepare($sql);
   $result->execute([$famille->getLibelle(), $famille->getActif(), $famille->getType(), $famille->getStatut(), $famille->getFamId()]);
}
    public function filtreFamille(Famille $famille)
    {
        $libelle = $famille->getLibelle();
        $type = $famille->getType();
        $sql = 'SELECT  * FROM famille
            WHERE libelle LIKE :libelle OR type LIKE :type';
        $result =  $this->prepare($sql);
        $result->execute([':libelle'=>$libelle, ':type'=>$type]);
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Famille::class);
        $all_familles = $result->fetchAll();
        return $all_familles;
    }
    public function deleteFamille(Famille $famille){

        $sql = 'DELETE FROM famille WHERE fam_id = ?';
        $result = $this->prepare($sql);
        $result->execute([$famille->getFamId()]);
    }
}