<?php

namespace SF\SmartfixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity(repositoryClass="SF\SmartfixBundle\Entity\ServiceRepository")
* @ORM\Table(name="service")
*/
class Service
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
     * @var string
     */
    private $serviceName;

    /**
     * @var string
     */
    private $avatar;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $dateCreate;
    /**
				
    * @ORM\OneToMany(targetEntity="Support", mappedBy="service")
    */
    protected $support;

    public function __construct()
    {
        $this->dateCreate = new \DateTime();
        $this->support = new ArrayCollection();
    }
    

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
     * Set serviceName
     *
     * @param string $serviceName
     * @return Service
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * Get serviceName
     *
     * @return string 
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Service
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Service
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
     * @return Service
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
    
    public function getFullImagePath() {
        return null === $this->avatar ? null : $this->getUploadRootDir(). $this->avatar;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir()."/";
    }

    protected function getTmpUploadRootDir() {
        return $_SERVER['DOCUMENT_ROOT']. '/uploads/images';
    }
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function uploadImage() {
        // the file property can be empty if the field is not required
        if (null === $this->avatar) {
            return;
        }
//        $this->avatar->move($this->getUploadRootDir(), $this->id.'.'.$this->avatar->getClientOriginalName());
        $fileName = md5($this->avatar->getClientOriginalName()).'.'.$this->avatar->getClientOriginalExtension();
        if(!$this->id){
            $this->avatar->move($this->getTmpUploadRootDir(), $fileName);
        }else{
            $this->avatar->move($this->getUploadRootDir(), $fileName);
        }
        
        
        $this->setAvatar($fileName);
    }

    /**
     * @ORM\PostPersist()
     */
    public function moveImage()
    {
        if (null === $this->avatar) {
            return;
        }
        if(!is_dir($this->getUploadRootDir())){
            mkdir($this->getUploadRootDir());
        }
        copy($this->getTmpUploadRootDir().$this->avatar, $this->getFullImagePath());
        unlink($this->getTmpUploadRootDir().$this->avatar->getClientOriginalName());
    }

    /**
     * @ORM\PreRemove()
     */
    public function removeImage()
    {
        unlink($this->getFullImagePath());
        rmdir($this->getUploadRootDir());
    }
    
    
    /**
     * Add support
     *
     * @param SF\SmartfixBundle\Entity\support $support
     * @return School
     */
    public function addSupport(SF\SmartfixBundle\Entity\support $support)
    {
        $this->support[] = $support;

        return $this;
    }
    /**
     * Remove support
     *
     * @param SF\SmartfixBundle\Entity\support $support
     */
    public function removeSupport(SF\SmartfixBundle\Entity\support $support)
    {
        $this->support->removeElement($support);
    }

    /**
     * Get support
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSupport()
    {
        return $this->support;
    }
}
