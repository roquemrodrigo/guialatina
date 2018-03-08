<?php

namespace BackendBundle\Entity;

/**
 * Promozioni
 */
class Promozioni
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
    private $sottocategoria;

    /**
     * @var integer
     */
    private $zona;

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $datapromo;

    /**
     * @var string
     */
    private $galleria;

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
    private $videoSx1;

    /**
     * @var string
     */
    private $videoSx2;

    /**
     * @var string
     */
    private $videoDx1;

    /**
     * @var string
     */
    private $videoDx2;

    /**
     * @var string
     */
    private $descr;


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
     * @return Promozioni
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
     * Set isgeoloc
     *
     * @param boolean $isgeoloc
     *
     * @return Promozioni
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
     * @return Promozioni
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
     * @return Promozioni
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
     * Set sottocategoria
     *
     * @param integer $sottocategoria
     *
     * @return Promozioni
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
     * Set zona
     *
     * @param integer $zona
     *
     * @return Promozioni
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return integer
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return Promozioni
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
     * Set datapromo
     *
     * @param string $datapromo
     *
     * @return Promozioni
     */
    public function setDatapromo($datapromo)
    {
        $this->datapromo = $datapromo;

        return $this;
    }

    /**
     * Get datapromo
     *
     * @return string
     */
    public function getDatapromo()
    {
        return $this->datapromo;
    }

    /**
     * Set galleria
     *
     * @param string $galleria
     *
     * @return Promozioni
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
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return Promozioni
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
     * @return Promozioni
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
     * @return Promozioni
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
     * Set videoSx1
     *
     * @param string $videoSx1
     *
     * @return Promozioni
     */
    public function setVideoSx1($videoSx1)
    {
        $this->videoSx1 = $videoSx1;

        return $this;
    }

    /**
     * Get videoSx1
     *
     * @return string
     */
    public function getVideoSx1()
    {
        return $this->videoSx1;
    }

    /**
     * Set videoSx2
     *
     * @param string $videoSx2
     *
     * @return Promozioni
     */
    public function setVideoSx2($videoSx2)
    {
        $this->videoSx2 = $videoSx2;

        return $this;
    }

    /**
     * Get videoSx2
     *
     * @return string
     */
    public function getVideoSx2()
    {
        return $this->videoSx2;
    }

    /**
     * Set videoDx1
     *
     * @param string $videoDx1
     *
     * @return Promozioni
     */
    public function setVideoDx1($videoDx1)
    {
        $this->videoDx1 = $videoDx1;

        return $this;
    }

    /**
     * Get videoDx1
     *
     * @return string
     */
    public function getVideoDx1()
    {
        return $this->videoDx1;
    }

    /**
     * Set videoDx2
     *
     * @param string $videoDx2
     *
     * @return Promozioni
     */
    public function setVideoDx2($videoDx2)
    {
        $this->videoDx2 = $videoDx2;

        return $this;
    }

    /**
     * Get videoDx2
     *
     * @return string
     */
    public function getVideoDx2()
    {
        return $this->videoDx2;
    }

    /**
     * Set descr
     *
     * @param string $descr
     *
     * @return Promozioni
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;

        return $this;
    }

    /**
     * Get descr
     *
     * @return string
     */
    public function getDescr()
    {
        return $this->descr;
    }
}

