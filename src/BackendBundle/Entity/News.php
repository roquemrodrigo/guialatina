<?php

namespace BackendBundle\Entity;

/**
 * News
 */
class News
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type = '0';

    /**
     * @var string
     */
    private $titolo;

    /**
     * @var string
     */
    private $fonte;

    /**
     * @var string
     */
    private $descrizione;

    /**
     * @var string
     */
    private $galleria;

    /**
     * @var string
     */
    private $youtubeCode;

    /**
     * @var integer
     */
    private $priority = '0';


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
     * Set type
     *
     * @param integer $type
     *
     * @return News
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return News
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
     * Set fonte
     *
     * @param string $fonte
     *
     * @return News
     */
    public function setFonte($fonte)
    {
        $this->fonte = $fonte;

        return $this;
    }

    /**
     * Get fonte
     *
     * @return string
     */
    public function getFonte()
    {
        return $this->fonte;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return News
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set galleria
     *
     * @param string $galleria
     *
     * @return News
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
     * Set youtubeCode
     *
     * @param string $youtubeCode
     *
     * @return News
     */
    public function setYoutubeCode($youtubeCode)
    {
        $this->youtubeCode = $youtubeCode;

        return $this;
    }

    /**
     * Get youtubeCode
     *
     * @return string
     */
    public function getYoutubeCode()
    {
        return $this->youtubeCode;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return News
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }
}

