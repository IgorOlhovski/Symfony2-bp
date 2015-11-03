<?php

namespace bp\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * bp\Bundle\Entity\League
 *
 * @ORM\Table(name="league")
 * @ORM\Entity(repositoryClass="bp\Bundle\Entity\LeagueRepository")
 *
 */
class League
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
    * @ORM\OneToMany(targetEntity="Tournament", mappedBy="league", cascade={"all"}, orphanRemoval=true)
    */
    protected $tournaments;

    /**
     * @ORM\ManyToOne(targetEntity="Sport", inversedBy="leagues")
     * @ORM\JoinColumn(name="sport_id", referencedColumnName="id", nullable=true)
     */
    protected $sport;

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
     * Add tournament
     *
     * @param bp\Bundle\Entity\Tournament $tournament
     */
    public function addLeague(\bp\Bundle\Entity\Tournament $tournament)
    {
        $this->tournaments[] = $league;
    }

    /**
     * Remove tournament
     *
     * @param bp\Bundle\Entity\Tournament $tournament
     */
    public function removeBookCharacter(\bp\Bundle\Entity\Tournament $tournament)
    {
       $this->leagues->removeElement($tournament);
    }

    /**
     * Get tournaments
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getTournaments()
    {
        return $this->tournaments;
    }

    /**
     * Get sport
     *
     * @return bp\Bundle\Entity\Sport
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Set sport
     *
     * @param bp\Bundle\Entity\Sport $sport
     */
    public function setSport($sport)
    {
        $this->sport = $sport;
    }

    /**
     * Add tournaments
     *
     * @param \bp\Bundle\Entity\Tournament $tournaments
     * @return League
     */
    public function addTournament(\bp\Bundle\Entity\Tournament $tournaments)
    {
        $this->tournaments[] = $tournaments;
    
        return $this;
    }

    /**
     * Remove tournaments
     *
     * @param \bp\Bundle\Entity\Tournament $tournaments
     */
    public function removeTournament(\bp\Bundle\Entity\Tournament $tournaments)
    {
        $this->tournaments->removeElement($tournaments);
    }
}
