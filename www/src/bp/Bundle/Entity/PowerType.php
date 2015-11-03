<?php

namespace bp\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * bp\Bundle\Entity\PowerType
 *
 * @ORM\Table(name="power_type")
 * @ORM\Entity(repositoryClass="bp\Bundle\Entity\PowerTypeRepository")
 *
 */
class PowerType
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
     * @ORM\Column(name="home_away", type="integer")
     */
    protected $home_away;
    
    /**
     * @ORM\Column(name="management", type="integer")
     */
    protected $management;

    /**
     * @ORM\Column(name="goulies", type="integer")
     */
    protected $goulies;
    
    /**
     * @ORM\Column(name="defence", type="integer")
     */
    protected $defence;
    
    /**
     * @ORM\Column(name="tactics", type="integer")
     */
    protected $tactics;

    /**
     * @ORM\Column(name="midfield", type="integer")
     */
    protected $midfield;

    /**
     * @ORM\Column(name="attack", type="integer")
     */
    protected $attack;

    /**
     * @ORM\Column(name="bench", type="integer")
     */
    protected $bench;

    /**
     * @ORM\Column(name="set_pieces", type="integer")
     */
    protected $set_pieces;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @ORM\ManyToOne(targetEntity="Sport", inversedBy="power_types")
     * @ORM\JoinColumn(name="sport_id", referencedColumnName="id", nullable=true)
     */
    protected $sport;
    
    /**
     * @ORM\OneToMany(targetEntity="UserTeamPower", mappedBy="power_type", cascade={"all"}, orphanRemoval=true)
     */
    protected $user_team_powers;

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
        ##$this->tournaments = new ArrayCollection();
    }


    public function __toString()
    {
        if($this->getName() !== null) return $this->getName();
        else return "";
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Team
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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
     * Set management
     *
     * @param integer $management
     * @return PowerType
     */
    public function setManagement($management)
    {
        $this->management = $management;
        return $this;
    }

    /**
     * Get management
     * @return integer 
     */
    public function getManagement()
    {
        return $this->management;
    }

    /**
     * Set set_pieces
     *
     * @param integer $set_pieces
     * @return PowerType
     */
    public function setSet_pieces($set_pieces)
    {
        $this->set_pieces = $set_pieces;
        return $this;
    }

    /**
     * Get set_pieces
     * @return integer 
     */
    public function getSet_pieces()
    {
        return $this->set_pieces;
    }

    /**
     * Set bench
     *
     * @param integer $bench
     * @return PowerType
     */
    public function setBench($bench)
    {
        $this->bench = $bench;
        return $this;
    }

    /**
     * Get bench
     * @return integer 
     */
    public function getBench()
    {
        return $this->bench;
    }

    /**
     * Set attack
     *
     * @param integer $attack
     * @return PowerType
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;
        return $this;
    }

    /**
     * Get attack
     * @return integer 
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set midfield
     *
     * @param integer $midfield
     * @return PowerType
     */
    public function setMidfield($midfield)
    {
        $this->midfield = $midfield;
        return $this;
    }

    /**
     * Get midfield
     * @return integer 
     */
    public function getMidfield()
    {
        return $this->midfield;
    }

    /**
     * Set defence
     *
     * @param integer $defence
     * @return PowerType
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;
        return $this;
    }

    /**
     * Get defence
     * @return integer 
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * Set goulies
     *
     * @param integer $goulies
     * @return PowerType
     */
    public function setGoulies($goulies)
    {
        $this->goulies = $goulies;
        return $this;
    }

    /**
     * Get goulies
     * @return integer 
     */
    public function getGoulies()
    {
        return $this->goulies;
    }

    /**
     * Set tactics
     *
     * @param integer $tactics
     * @return PowerType
     */
    public function setTactics($tactics)
    {
        $this->tactics = $tactics;
        return $this;
    }

    /**
     * Get tactics
     * @return integer 
     */
    public function getTactics()
    {
        return $this->tactics;
    }

    /**
     * Set home_away
     *
     * @param integer $home_away
     * @return PowerType
     */
    public function setHome_away($home_away)
    {
        $this->home_away = $home_away;
        return $this;
    }

    /**
     * Get home_away
     * @return integer 
     */
    public function getHome_away()
    {
        return $this->home_away;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PowerType
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
     * Set description
     *
     * @param string $description
     * @return PowerType
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return PowerType
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return PowerType
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set sport
     *
     * @param \bp\Bundle\Entity\Sport $sport
     * @return PowerType
     */
    public function setSport(\bp\Bundle\Entity\Sport $sport = null)
    {
        $this->sport = $sport;
    
        return $this;
    }

    /**
     * Get sport
     *
     * @return \bp\Bundle\Entity\Sport 
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Add user_team_powers
     *
     * @param \bp\Bundle\Entity\UserTeamPower $userTeamPowers
     * @return PowerType
     */
    public function addUserTeamPower(\bp\Bundle\Entity\UserTeamPower $userTeamPowers)
    {
        $this->user_team_powers[] = $userTeamPowers;
    
        return $this;
    }

    /**
     * Remove user_team_powers
     *
     * @param \bp\Bundle\Entity\UserTeamPower $userTeamPowers
     */
    public function removeUserTeamPower(\bp\Bundle\Entity\UserTeamPower $userTeamPowers)
    {
        $this->user_team_powers->removeElement($userTeamPowers);
    }

    /**
     * Get user_team_powers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserTeamPowers()
    {
        return $this->user_team_powers;
    }
}
