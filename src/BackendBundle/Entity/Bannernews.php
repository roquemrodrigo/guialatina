<?php

namespace BackendBundle\Entity;

/**
 * Bannernews
 */
class Bannernews
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $testo;

    /**
     * @var string
     */
    private $youtubeCode;


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
     * Set image
     *
     * @param string $image
     *
     * @return Bannernews
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Bannernews
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set testo
     *
     * @param string $testo
     *
     * @return Bannernews
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }

    /**
     * Get testo
     *
     * @return string
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set youtubeCode
     *
     * @param string $youtubeCode
     *
     * @return Bannernews
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
}

