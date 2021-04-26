<?php
/**
 * Created by PhpStorm.
 * User: HB1
 * Date: 29/03/2018
 * Time: 09:54
 */

namespace Modele;


use Lib\Entite;

class Edito extends Entite
{

    protected $titre, $contenu, $type, $statut, $actif, $famille, $publier;

    protected $contact_id, $user_id, $fam_id, $valeur_id;

    public function __construct(array $data = [])
    {
        $this->date = new \DateTime();
        $this->famille = new Famille();
        $this->contact = new Contact();
        $this->user = new auteur();
        parent::__construct($data);
    }

    /**
     * @return mixed
     */
    public function getPublier()
    {
        return $this->publier;
    }

    /**
     * @param mixed $publier
     * @return Edito
     */
    public function setPublier($publier)
    {
        $this->publier = $publier;
        return $this;
    }









    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return Edito
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     * @return Edito
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * @param mixed $actif
     * @return Edito
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * @param mixed $contact_id
     * @return Edito
     */
    public function setContactId($contact_id)
    {
        $this->contact_id = $contact_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     * @return Edito
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFamId()
    {
        return $this->fam_id;
    }

    /**
     * @param mixed $fam_id
     * @return Edito
     */
    public function setFamId($fam_id)
    {
        $this->fam_id = $fam_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValeurId()
    {
        return $this->valeur_id;
    }

    /**
     * @param mixed $valeur_id
     * @return Edito
     */
    public function setValeurId($valeur_id)
    {
        $this->valeur_id = $valeur_id;
        return $this;
    }/**
 * @return mixed
 */


    /**
     * @return Famille
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * @param Famille $famille
     * @return Edito
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;
        return $this;
    }



}