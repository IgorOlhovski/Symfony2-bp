<?php

namespace bp\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Api_users
 */
class Api_users
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $apiId;

    /**
     * @var string
     */
    private $history;


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
     * @return Api_users
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
     * @return Api_users
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
     * @return Api_users
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
     * @return Api_users
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
