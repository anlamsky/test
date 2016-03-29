<?php

namespace RESTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use StudentBundle\Entity\School;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @ORM\Entity(repositoryClass="RESTBundle\Entity\ClientRepository")
* @ORM\Table(name="client")
*/
class Client
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
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $avatar;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $creditCart;

    /**
     * @var \DateTime
     */
    private $dateReeate;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Client
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Client
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Client
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
     * Set email
     *
     * @param string $email
     * @return Client
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
     * @return Client
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
     * Set mobile
     *
     * @param string $mobile
     * @return Client
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Client
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set creditCart
     *
     * @param string $creditCart
     * @return Client
     */
    public function setCreditCart($creditCart)
    {
        $this->creditCart = $creditCart;

        return $this;
    }

    /**
     * Get creditCart
     *
     * @return string 
     */
    public function getCreditCart()
    {
        return $this->creditCart;
    }

    /**
     * Set dateReeate
     *
     * @param \DateTime $dateReeate
     * @return Client
     */
    public function setDateReeate($dateReeate)
    {
        $this->dateReeate = $dateReeate;

        return $this;
    }

    /**
     * Get dateReeate
     *
     * @return \DateTime 
     */
    public function getDateReeate()
    {
        return $this->dateReeate;
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
//        echo $this->id;exit;
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
}
