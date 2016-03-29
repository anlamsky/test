<?php

namespace SF\SmartfixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="SF\SmartfixBundle\Entity\ClientDeviceRepository")
 * @ORM\Table(name="client_device")
 * ClientDevice
 */
class ClientDevice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     */
    private $clientId;

    /**
     * @var string
     */
    private $deviceId;

    /**
     * @var string
     */
    private $operatingSystem;

    /**
     * @var string
     */
    private $deviceToken;

    /**
     * @var string
     */
    private $client;

    /**
     * @var integer
     */
    private $histories;


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
     * Set clientId
     *
     * @param integer $clientId
     * @return ClientDevice
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return integer 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set deviceId
     *
     * @param string $deviceId
     * @return ClientDevice
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * Get deviceId
     *
     * @return string 
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set operatingSystem
     *
     * @param string $operatingSystem
     * @return ClientDevice
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->operatingSystem = $operatingSystem;

        return $this;
    }

    /**
     * Get operatingSystem
     *
     * @return string 
     */
    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    /**
     * Set deviceToken
     *
     * @param string $deviceToken
     * @return ClientDevice
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;

        return $this;
    }

    /**
     * Get deviceToken
     *
     * @return string 
     */
    public function getDeviceToken()
    {
        return $this->deviceToken;
    }

    /**
     * Set client
     *
     * @param string $client
     * @return ClientDevice
     */
    public function setClient($client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set histories
     *
     * @param integer $histories
     * @return ClientDevice
     */
    public function setHistories($histories = null)
    {
        $this->histories = $histories;

        return $this;
    }

    /**
     * Get histories
     *
     * @return integer 
     */
    public function getHistories()
    {
        return $this->histories;
    }
}
