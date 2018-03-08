<?php

namespace BackendBundle\Entity;

/**
 * Tags
 */
class Tags
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
    private $sottocategoriaId;


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
     * @return Tags
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
     * Set sottocategoriaId
     *
     * @param string $sottocategoriaId
     *
     * @return Tags
     */
    public function setSottocategoriaId($sottocategoriaId)
    {
        $this->sottocategoriaId = $sottocategoriaId;

        return $this;
    }

    /**
     * Get sottocategoriaId
     *
     * @return string
     */
    public function getSottocategoriaId()
    {
        return $this->sottocategoriaId;
    }
}

