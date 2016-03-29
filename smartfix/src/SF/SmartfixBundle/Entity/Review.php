<?php

namespace SF\SmartfixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 */
class Review
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $assId;

    /**
     * @var integer
     */
    private $clientId;
    /**
     * @var integer
     */
    private $assType;

    /**
     * @var integer
     */
    private $rating;

    /**
     * @var integer
     */
    private $onTime;

    /**
     * @var integer
     */
    private $proFix;

    /**
     * @var integer
     */
    private $countesy;

    /**
     * @var integer
     */
    private $clarityOrExp;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $dateCreate;


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
     * Set assId
     *
     * @param integer $assId
     * @return Review
     */
    public function setAssId($assId)
    {
        $this->assId = $assId;

        return $this;
    }

    /**
     * Get assId
     *
     * @return integer 
     */
    public function getAssId()
    {
        return $this->assId;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     * @return Review
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
     * Set assType
     *
     * @param integer $assType
     * @return Review
     */
    public function setAssType($assType)
    {
        $this->assType = $assType;

        return $this;
    }

    /**
     * Get assType
     *
     * @return integer 
     */
    public function getAssType()
    {
        return $this->assType;
    }
    
    /**
     * Set rating
     *
     * @param integer $rating
     * @return Review
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set onTime
     *
     * @param integer $onTime
     * @return Review
     */
    public function setOnTime($onTime)
    {
        $this->onTime = $onTime;

        return $this;
    }

    /**
     * Get onTime
     *
     * @return integer 
     */
    public function getOnTime()
    {
        return $this->onTime;
    }

    /**
     * Set proFix
     *
     * @param integer $proFix
     * @return Review
     */
    public function setProFix($proFix)
    {
        $this->proFix = $proFix;

        return $this;
    }

    /**
     * Get proFix
     *
     * @return integer 
     */
    public function getProFix()
    {
        return $this->proFix;
    }

    /**
     * Set countesy
     *
     * @param integer $countesy
     * @return Review
     */
    public function setCountesy($countesy)
    {
        $this->countesy = $countesy;

        return $this;
    }

    /**
     * Get countesy
     *
     * @return integer 
     */
    public function getCountesy()
    {
        return $this->countesy;
    }

    /**
     * Set clarityOrExp
     *
     * @param integer $clarityOrExp
     * @return Review
     */
    public function setClarityOrExp($clarityOrExp)
    {
        $this->clarityOrExp = $clarityOrExp;

        return $this;
    }

    /**
     * Get clarityOrExp
     *
     * @return integer 
     */
    public function getClarityOrExp()
    {
        return $this->clarityOrExp;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Review
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     * @return Review
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
}
