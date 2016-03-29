<?php

namespace SF\SmartfixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass="SF\SmartfixBundle\Entity\SupportRepository")
* @ORM\Table(name="support")
*/
class Support
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
    private $number;

    /**
     * @var integer
     */
    private $serviceId;

    /**
     * @var string
     */
    private $streetName;

    /**
     * @var integer
     */
    private $postCost;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $infomaition;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $timeSlot;
    
    /**
     * @var integer
     */
    private $status;
    /**
     * @var \DateTime
     */
    private $dateCreate;

    /**
     * @var string
     */
    private $ccNumber;

    /**
     * @var \DateTime
     */
    private $exp;

    /**
     * @var integer
     */
    private $num;
    
     /**
    * @ORM\ManyToOne(targetEntity="Service", inversedBy="support")
    * @ORM\JoinColumn(name="service_id", referencedColumnName="id")
    */
    protected $service;

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
     * Set number
     *
     * @param integer $number
     * @return Support
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set serviceId
     *
     * @param integer $serviceId
     * @return Support
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * Get serviceId
     *
     * @return integer 
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * Set streetName
     *
     * @param string $streetName
     * @return Support
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;

        return $this;
    }

    /**
     * Get streetName
     *
     * @return string 
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Set postCost
     *
     * @param integer $postCost
     * @return Support
     */
    public function setPostCost($postCost)
    {
        $this->postCost = $postCost;

        return $this;
    }

    /**
     * Get postCost
     *
     * @return integer 
     */
    public function getPostCost()
    {
        return $this->postCost;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Support
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set infomaition
     *
     * @param string $infomaition
     * @return Support
     */
    public function setInfomaition($infomaition)
    {
        $this->infomaition = $infomaition;

        return $this;
    }

    /**
     * Get infomaition
     *
     * @return string 
     */
    public function getInfomaition()
    {
        return $this->infomaition;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Support
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set timeSlot
     *
     * @param string $timeSlot
     * @return Support
     */
    public function setTimeSlot($timeSlot)
    {
        $this->timeSlot = $timeSlot;

        return $this;
    }

    /**
     * Get timeSlot
     *
     * @return string 
     */
    public function getTimeSlot()
    {
        return $this->timeSlot;
    }
    
    /**
     * Set status
     *
     * @param integer $status
     * @return Support
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     * @return Support
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime 
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set ccNumber
     *
     * @param string $ccNumber
     * @return Support
     */
    public function setCcNumber($ccNumber = null)
    {
        $this->ccNumber = $ccNumber;

        return $this;
    }

    /**
     * Get ccNumber
     *
     * @return string 
     */
    public function getCcNumber()
    {
        return $this->ccNumber;
    }

    /**
     * Set exp
     *
     * @param \Date$exp
     * @return Support
     */
    public function setExp($exp  = null)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get exp
     *
     * @return \Date 
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return Support
     */
    public function setNum($num  = null)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }
    /**
     * Set service
     *
     * @param SF\SmartfixBundle\Entity\Service $service
     * @return Student
     */
    public function setService(SF\SmartfixBundle\Entity\Service $service = null)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Get service
     *
     * @return SF\SmartfixBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }
}
