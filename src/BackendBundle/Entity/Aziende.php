<?php

namespace BackendBundle\Entity;

/**
 * Aziende
 */
class Aziende
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $abilitato;

    /**
     * @var boolean
     */
    private $cliente;

    /**
     * @var boolean
     */
    private $isgeoloc;

    /**
     * @var float
     */
    private $geoLat = '0';

    /**
     * @var float
     */
    private $geoLng = '0';

    /**
     * @var integer
     */
    private $nogeoDist = '0';

    /**
     * @var integer
     */
    private $sottocategoria;

    /**
     * @var float
     */
    private $rank = '3';

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $utente = '0';

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $descLunga;

    /**
     * @var string
     */
    private $galleria;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var string
     */
    private $tagUtente;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var string
     */
    private $citta;

    /**
     * @var string
     */
    private $cap;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $cell;

    /**
     * @var string
     */
    private $whatzup;

    /**
     * @var string
     */
    private $skype;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $fbProfile;

    /**
     * @var string
     */
    private $youtube;

    /**
     * @var string
     */
    private $gplus;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $linkedin;

    /**
     * @var string
     */
    private $web;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set abilitato
     *
     * @param boolean $abilitato
     *
     * @return Aziende
     */
    public function setAbilitato($abilitato)
    {
        $this->abilitato = $abilitato;

        return $this;
    }

    /**
     * Get abilitato
     *
     * @return boolean
     */
    public function getAbilitato()
    {
        return $this->abilitato;
    }

    /**
     * Set cliente
     *
     * @param boolean $cliente
     *
     * @return Aziende
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return boolean
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set isgeoloc
     *
     * @param boolean $isgeoloc
     *
     * @return Aziende
     */
    public function setIsgeoloc($isgeoloc)
    {
        $this->isgeoloc = $isgeoloc;

        return $this;
    }

    /**
     * Get isgeoloc
     *
     * @return boolean
     */
    public function getIsgeoloc()
    {
        return $this->isgeoloc;
    }

    /**
     * Set geoLat
     *
     * @param float $geoLat
     *
     * @return Aziende
     */
    public function setGeoLat($geoLat)
    {
        $this->geoLat = $geoLat;

        return $this;
    }

    /**
     * Get geoLat
     *
     * @return float
     */
    public function getGeoLat()
    {
        return $this->geoLat;
    }

    /**
     * Set geoLng
     *
     * @param float $geoLng
     *
     * @return Aziende
     */
    public function setGeoLng($geoLng)
    {
        $this->geoLng = $geoLng;

        return $this;
    }

    /**
     * Get geoLng
     *
     * @return float
     */
    public function getGeoLng()
    {
        return $this->geoLng;
    }

    /**
     * Set nogeoDist
     *
     * @param integer $nogeoDist
     *
     * @return Aziende
     */
    public function setNogeoDist($nogeoDist)
    {
        $this->nogeoDist = $nogeoDist;

        return $this;
    }

    /**
     * Get nogeoDist
     *
     * @return integer
     */
    public function getNogeoDist()
    {
        return $this->nogeoDist;
    }

    /**
     * Set sottocategoria
     *
     * @param integer $sottocategoria
     *
     * @return Aziende
     */
    public function setSottocategoria($sottocategoria)
    {
        $this->sottocategoria = $sottocategoria;

        return $this;
    }

    /**
     * Get sottocategoria
     *
     * @return integer
     */
    public function getSottocategoria()
    {
        return $this->sottocategoria;
    }

    /**
     * Set rank
     *
     * @param float $rank
     *
     * @return Aziende
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return float
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Aziende
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set utente
     *
     * @param integer $utente
     *
     * @return Aziende
     */
    public function setUtente($utente)
    {
        $this->utente = $utente;

        return $this;
    }

    /**
     * Get utente
     *
     * @return integer
     */
    public function getUtente()
    {
        return $this->utente;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return Aziende
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Aziende
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set descLunga
     *
     * @param string $descLunga
     *
     * @return Aziende
     */
    public function setDescLunga($descLunga)
    {
        $this->descLunga = $descLunga;

        return $this;
    }

    /**
     * Get descLunga
     *
     * @return string
     */
    public function getDescLunga()
    {
        return $this->descLunga;
    }

    /**
     * Set galleria
     *
     * @param string $galleria
     *
     * @return Aziende
     */
    public function setGalleria($galleria)
    {
        $this->galleria = $galleria;

        return $this;
    }

    /**
     * Get galleria
     *
     * @return string
     */
    public function getGalleria()
    {
        return $this->galleria;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return Aziende
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set tagUtente
     *
     * @param string $tagUtente
     *
     * @return Aziende
     */
    public function setTagUtente($tagUtente)
    {
        $this->tagUtente = $tagUtente;

        return $this;
    }

    /**
     * Get tagUtente
     *
     * @return string
     */
    public function getTagUtente()
    {
        return $this->tagUtente;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return Aziende
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set citta
     *
     * @param string $citta
     *
     * @return Aziende
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string
     */
    public function getCitta()
    {
        return $this->citta;
    }

    /**
     * Set cap
     *
     * @param string $cap
     *
     * @return Aziende
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Aziende
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Aziende
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set cell
     *
     * @param string $cell
     *
     * @return Aziende
     */
    public function setCell($cell)
    {
        $this->cell = $cell;

        return $this;
    }

    /**
     * Get cell
     *
     * @return string
     */
    public function getCell()
    {
        return $this->cell;
    }

    /**
     * Set whatzup
     *
     * @param string $whatzup
     *
     * @return Aziende
     */
    public function setWhatzup($whatzup)
    {
        $this->whatzup = $whatzup;

        return $this;
    }

    /**
     * Get whatzup
     *
     * @return string
     */
    public function getWhatzup()
    {
        return $this->whatzup;
    }

    /**
     * Set skype
     *
     * @param string $skype
     *
     * @return Aziende
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Aziende
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set fbProfile
     *
     * @param string $fbProfile
     *
     * @return Aziende
     */
    public function setFbProfile($fbProfile)
    {
        $this->fbProfile = $fbProfile;

        return $this;
    }

    /**
     * Get fbProfile
     *
     * @return string
     */
    public function getFbProfile()
    {
        return $this->fbProfile;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     *
     * @return Aziende
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * Set gplus
     *
     * @param string $gplus
     *
     * @return Aziende
     */
    public function setGplus($gplus)
    {
        $this->gplus = $gplus;

        return $this;
    }

    /**
     * Get gplus
     *
     * @return string
     */
    public function getGplus()
    {
        return $this->gplus;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Aziende
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     *
     * @return Aziende
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set web
     *
     * @param string $web
     *
     * @return Aziende
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
    }
}

