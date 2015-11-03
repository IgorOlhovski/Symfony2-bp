<?php

namespace bp\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * bp\Bundle\Entity\Sport
 *
 * @ORM\Table(name="sport")
 * @ORM\Entity(repositoryClass="bp\Bundle\Entity\SportRepository")
 *
 */
class Sport
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
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @ORM\OneToMany(targetEntity="League", mappedBy="sport", cascade={"all"}, orphanRemoval=true)
     */
    protected $leagues;

    /**
     * @ORM\OneToMany(targetEntity="PowerType", mappedBy="sport", cascade={"all"}, orphanRemoval=true)
     */
    protected $power_types;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @var datetime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    protected $updated;



    public function __construct()
    {
        $this->leagues = new ArrayCollection();
    }

    public function __toString()
    {
        if($this->getName() !== null) return $this->getName();
        else return "";
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param datetime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return datetime
     */
    public function getUpdated()
    {
        return $this->updated;
    }


    /**
     * Add league
     *
     * @param bp\Bundle\Entity\League $league
     */
    public function addLeague(\bp\Bundle\Entity\League $league)
    {
        $this->leagues[] = $league;
    }

    /**
     * Remove league
     *
     * @param bp\Bundle\Entity\League $league
     */
    public function removeLeague(\bp\Bundle\Entity\League $league)
    {
        $this->leagues->removeElement($league);
    }

    /**
     * Get leagues
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getLeagues()
    {
        return $this->leagues;
    }


    /**
     * Add power_types
     *
     * @param \bp\Bundle\Entity\PowerType $powerTypes
     * @return Sport
     */
    public function addPowerType(\bp\Bundle\Entity\PowerType $powerTypes)
    {
        $this->power_types[] = $powerTypes;
    
        return $this;
    }

    /**
     * Remove power_types
     *
     * @param \bp\Bundle\Entity\PowerType $powerTypes
     */
    public function removePowerType(\bp\Bundle\Entity\PowerType $powerTypes)
    {
        $this->power_types->removeElement($powerTypes);
    }

    /**
     * Get power_types
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPowerTypes()
    {
        return $this->power_types;
    }
}
