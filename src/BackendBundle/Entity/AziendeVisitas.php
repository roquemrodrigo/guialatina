<?php

namespace BackendBundle\Entity;

/**
 * AziendeVisitas
 */
class AziendeVisitas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $aziendaid;

    /**
     * @var integer
     */
    private $catAzienda;

    /**
     * @var integer
     */
    private $visitas;


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
     * Set aziendaid
     *
     * @param integer $aziendaid
     *
     * @return AziendeVisitas
     */
    public function setAziendaid($aziendaid)
    {
        $this->aziendaid = $aziendaid;

        return $this;
    }

    /**
     * Get aziendaid
     *
     * @return integer
     */
    public function getAziendaid()
    {
        return $this->aziendaid;
    }

    /**
     * Set catAzienda
     *
     * @param integer $catAzienda
     *
     * @return AziendeVisitas
     */
    public function setCatAzienda($catAzienda)
    {
        $this->catAzienda = $catAzienda;

        return $this;
    }

    /**
     * Get catAzienda
     *
     * @return integer
     */
    public function getCatAzienda()
    {
        return $this->catAzienda;
    }

    /**
     * Set visitas
     *
     * @param integer $visitas
     *
     * @return AziendeVisitas
     */
    public function setVisitas($visitas)
    {
        $this->visitas = $visitas;

        return $this;
    }

    /**
     * Get visitas
     *
     * @return integer
     */
    public function getVisitas()
    {
        return $this->visitas;
    }
}

