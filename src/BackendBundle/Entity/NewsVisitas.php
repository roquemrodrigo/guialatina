<?php

namespace BackendBundle\Entity;

/**
 * NewsVisitas
 */
class NewsVisitas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $newsid;

    /**
     * @var integer
     */
    private $typeNews;

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
     * Set newsid
     *
     * @param integer $newsid
     *
     * @return NewsVisitas
     */
    public function setNewsid($newsid)
    {
        $this->newsid = $newsid;

        return $this;
    }

    /**
     * Get newsid
     *
     * @return integer
     */
    public function getNewsid()
    {
        return $this->newsid;
    }

    /**
     * Set typeNews
     *
     * @param integer $typeNews
     *
     * @return NewsVisitas
     */
    public function setTypeNews($typeNews)
    {
        $this->typeNews = $typeNews;

        return $this;
    }

    /**
     * Get typeNews
     *
     * @return integer
     */
    public function getTypeNews()
    {
        return $this->typeNews;
    }

    /**
     * Set visitas
     *
     * @param integer $visitas
     *
     * @return NewsVisitas
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

