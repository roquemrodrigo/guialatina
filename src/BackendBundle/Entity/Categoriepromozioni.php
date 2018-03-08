<?php

namespace BackendBundle\Entity;

/**
 * Categoriepromozioni
 */
class Categoriepromozioni
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $mapIcon;


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
     * Set nome
     *
     * @param string $nome
     *
     * @return Categoriepromozioni
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Categoriepromozioni
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
     * Set mapIcon
     *
     * @param string $mapIcon
     *
     * @return Categoriepromozioni
     */
    public function setMapIcon($mapIcon)
    {
        $this->mapIcon = $mapIcon;

        return $this;
    }

    /**
     * Get mapIcon
     *
     * @return string
     */
    public function getMapIcon()
    {
        return $this->mapIcon;
    }
}

