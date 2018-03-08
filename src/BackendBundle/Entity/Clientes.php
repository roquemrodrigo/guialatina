<?php

namespace BackendBundle\Entity;

/**
 * Clientes
 */
class Clientes
{
    /**
     * @var integer
     */
    private $clienteId;

    /**
     * @var string
     */
    private $nombreCliente = '';

    /**
     * @var string
     */
    private $direccionCliente = '';

    /**
     * @var string
     */
    private $telefonoCliente = '';

    /**
     * @var string
     */
    private $emailCliente = '';

    /**
     * @var integer
     */
    private $activo = '0';


    /**
     * Get clienteId
     *
     * @return integer
     */
    public function getClienteId()
    {
        return $this->clienteId;
    }

    /**
     * Set nombreCliente
     *
     * @param string $nombreCliente
     *
     * @return Clientes
     */
    public function setNombreCliente($nombreCliente)
    {
        $this->nombreCliente = $nombreCliente;

        return $this;
    }

    /**
     * Get nombreCliente
     *
     * @return string
     */
    public function getNombreCliente()
    {
        return $this->nombreCliente;
    }

    /**
     * Set direccionCliente
     *
     * @param string $direccionCliente
     *
     * @return Clientes
     */
    public function setDireccionCliente($direccionCliente)
    {
        $this->direccionCliente = $direccionCliente;

        return $this;
    }

    /**
     * Get direccionCliente
     *
     * @return string
     */
    public function getDireccionCliente()
    {
        return $this->direccionCliente;
    }

    /**
     * Set telefonoCliente
     *
     * @param string $telefonoCliente
     *
     * @return Clientes
     */
    public function setTelefonoCliente($telefonoCliente)
    {
        $this->telefonoCliente = $telefonoCliente;

        return $this;
    }

    /**
     * Get telefonoCliente
     *
     * @return string
     */
    public function getTelefonoCliente()
    {
        return $this->telefonoCliente;
    }

    /**
     * Set emailCliente
     *
     * @param string $emailCliente
     *
     * @return Clientes
     */
    public function setEmailCliente($emailCliente)
    {
        $this->emailCliente = $emailCliente;

        return $this;
    }

    /**
     * Get emailCliente
     *
     * @return string
     */
    public function getEmailCliente()
    {
        return $this->emailCliente;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     *
     * @return Clientes
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer
     */
    public function getActivo()
    {
        return $this->activo;
    }
}

