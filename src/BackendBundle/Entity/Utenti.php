<?php

namespace BackendBundle\Entity;

/**
 * Utenti
 */
class Utenti
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var boolean
     */
    private $isAdmin;

    /**
     * @var boolean
     */
    private $isNews;

    /**
     * @var boolean
     */
    private $confirmed;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var string
     */
    private $tsCk;


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
     * Set email
     *
     * @param string $email
     *
     * @return Utenti
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
     * Set password
     *
     * @param string $password
     *
     * @return Utenti
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     *
     * @return Utenti
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set isNews
     *
     * @param boolean $isNews
     *
     * @return Utenti
     */
    public function setIsNews($isNews)
    {
        $this->isNews = $isNews;

        return $this;
    }

    /**
     * Get isNews
     *
     * @return boolean
     */
    public function getIsNews()
    {
        return $this->isNews;
    }

    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     *
     * @return Utenti
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return boolean
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set hash
     *
     * @param string $hash
     *
     * @return Utenti
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set tsCk
     *
     * @param string $tsCk
     *
     * @return Utenti
     */
    public function setTsCk($tsCk)
    {
        $this->tsCk = $tsCk;

        return $this;
    }

    /**
     * Get tsCk
     *
     * @return string
     */
    public function getTsCk()
    {
        return $this->tsCk;
    }
}

