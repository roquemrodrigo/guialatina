<?php

namespace BackendBundle\Entity;

/**
 * Sottocategorie
 */
class Sottocategorie
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $categoria;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $modifMapIcon;

    /**
     * @var string
     */
    private $tags;


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
     * Set categoria
     *
     * @param integer $categoria
     *
     * @return Sottocategorie
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return integer
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Sottocategorie
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
     * Set modifMapIcon
     *
     * @param string $modifMapIcon
     *
     * @return Sottocategorie
     */
    public function setModifMapIcon($modifMapIcon)
    {
        $this->modifMapIcon = $modifMapIcon;

        return $this;
    }

    /**
     * Get modifMapIcon
     *
     * @return string
     */
    public function getModifMapIcon()
    {
        return $this->modifMapIcon;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Sottocategorie
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }
}

