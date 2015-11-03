<?php

namespace bp\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * bp\Bundle\Entity\Restapiusers
 *
 * @ORM\Table(name="rest_api_users")
 * @ORM\Entity(repositoryClass="bp\Bundle\Entity\RestapiusersRepository")
 *
 */
class Restapiusers
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @ORM\Column(name="apiId", type="string", length=32)
     */
    protected $apiId;

    /**
     * @ORM\Column(name="history")
     */
    protected $history;


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
     * Set name
     *
     * @param string $name
     * @return Restapiusers
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Restapiusers
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
     * Set apiId
     *
     * @param string $apiId
     * @return Restapiusers
     */
    public function setApiId($apiId)
    {
        $this->apiId = $apiId;
    
        return $this;
    }

    /**
     * Get apiId
     *
     * @return string 
     */
    public function getApiId()
    {
        return $this->apiId;
    }

    /**
     * Set history
     *
     * @param string $history
     * @return Restapiusers
     */
    public function setHistory($history)
    {
        $this->history = $history;
    
        return $this;
    }

    /**
     * Get history
     *
     * @return string 
     */
    public function getHistory()
    {
        return $this->history;
    }
}
