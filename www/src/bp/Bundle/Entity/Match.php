<?php

namespace bp\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * bp\Bundle\Entity\Match
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="bp\Bundle\Entity\MatchRepository")
 *
 */
class Match
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
     * @ORM\Column(name="score_home", type="integer")
     */
    protected $score_home;
    
    /**
     * @ORM\Column(name="score_away", type="integer")
     */
    protected $score_away;
    
    /**
     * @ORM\Column(name="favorited_by", type="text")
     */
    protected $favorited_by;
    
    /**
     * @ORM\Column(name="result_type", type="text")
     */
    protected $result_type;
    
    /**
     * @var datetime $begins_at
     *
     * @ORM\Column(type="datetime")
     */
    protected $begins_at;

    /**
    * @Gedmo\Slug(fields={"tournament_name", "team_home_name", "team_away_name"}, unique=true)
    * @ORM\Column(type="string", length=128, unique=true)
    */
    private $slug;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $venue_is_neutral;

    /**
     * @ORM\ManyToOne(targetEntity="Tournament", inversedBy="matches")
     * @ORM\JoinColumn(name="tournament_id", referencedColumnName="id", nullable=true)
     */
    protected $tournament;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="matches_home")
     * @ORM\JoinColumn(name="team_home_id", referencedColumnName="id", nullable=true)
     */
    protected $team_home;
    
    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="matches_away")
     * @ORM\JoinColumn(name="team_away_id", referencedColumnName="id", nullable=true)
     */
    protected $team_away;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $tournament_name;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $team_home_name;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $team_away_name;
    
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

    
    public function __toString()
    {
        /*if($this->getName() !== null) return $this->getName();
        else return "";*/
    	return "";
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
     * Get score_away
     *
     * @return integer 
     */
    public function getScore_away()
    {
        return $this->score_away;
    }
    
    /**
     * Set score_away
     *
     * @param string $score_away
     * @return Match
     */
    public function setScore_away($score_away)
    {
        $this->score_away = $score_away;
    
        return $this;
    }
    
    /**
     * Get score_home
     *
     * @return integer 
     */
    public function getScore_home()
    {
        return $this->score_home;
    }

    /**
     * Set score_home
     *
     * @param string $score_home
     * @return Match
     */
    public function setScore_home($score_home)
    {
        $this->score_home = $score_home;
    
        return $this;
    }

    /**
     * Get result_type
     *
     * @return string 
     */
    public function getResult_type()
    {
        return $this->result_type;
    }  

    /**
     * Set result_type
     *
     * @param string $result_type
     * @return Match
     */
    public function setResult_type($result_type)
    {
        $this->result_type = $result_type;
    
        return $this;
    }
   
    /**
     * Set begins_at
     *
     * @param \DateTime $beginsAt
     * @return Match
     */
    public function setBegins_At($beginsAt)
    {
        $this->begins_at = $beginsAt;
    
        return $this;
    }

    /**
     * Get begins_at
     *
     * @return \DateTime 
     */
    public function getBegins_At()
    {
        return $this->begins_at;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Match
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Match
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
     * Set venue_is_neutral
     *
     * @param boolean $venueIsNeutral
     * @return Match
     */
    public function setVenueIsNeutral($venueIsNeutral)
    {
        $this->venue_is_neutral = $venueIsNeutral;
    
        return $this;
    }

    /**
     * Get venue_is_neutral
     *
     * @return boolean 
     */
    public function getVenueIsNeutral()
    {
        return $this->venue_is_neutral;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Match
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
     * @return Match
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
     * Set tournament
     *
     * @param \bp\Bundle\Entity\Tournament $tournament
     * @return Match
     */
    public function setTournament(\bp\Bundle\Entity\Tournament $tournament = null)
    {
        $this->tournament = $tournament;
    
        return $this;
    }

    /**
     * Get tournament
     *
     * @return \bp\Bundle\Entity\Tournament 
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * Set team_home
     *
     * @param \bp\Bundle\Entity\Team $teamHome
     * @return Match
     */
    public function setTeamHome(\bp\Bundle\Entity\Team $teamHome = null)
    {
        $this->team_home = $teamHome;
    
        return $this;
    }

    /**
     * Get team_home
     *
     * @return \bp\Bundle\Entity\Team 
     */
    public function getTeamHome()
    {
        return $this->team_home;
    }

    /**
     * Set team_away
     *
     * @param \bp\Bundle\Entity\Team $teamAway
     * @return Match
     */
    public function setTeamAway(\bp\Bundle\Entity\Team $teamAway = null)
    {
        $this->team_away = $teamAway;
    
        return $this;
    }

    /**
     * Get team_away
     *
     * @return \bp\Bundle\Entity\Team 
     */
    public function getTeamAway()
    {
        return $this->team_away;
    }

    /**
     * Set tournament_name
     *
     * @param string $tournamentName
     * @return Match
     */
    public function setTournament_name($tournamentName)
    {
        $this->tournament_name = $tournamentName;
    
        return $this;
    }

    /**
     * Get tournament_name
     *
     * @return string 
     */
    public function getTournament_name()
    {
        return $this->tournament_name;
    }

    /**
     * Set team_home_name
     *
     * @param string $teamHomeName
     * @return Match
     */
    public function setTeam_home_name($teamHomeName)
    {
        $this->team_home_name = $teamHomeName;
    
        return $this;
    }

    /**
     * Get favorited_by
     *
     * @return string 
     */
    public function getFavorited_by()
    {
        return $this->favorited_by;
    }

    /**
     * Set team_away_name
     *
     * @param string $favorited_by
     * @return Match
     */
    public function setFavorited_by($favorited_by)
    {
        $this->team_away_name = $favorited_by;
    
        return $this;
    }

    /**
     * Get team_home_name
     *
     * @return string 
     */
    public function getTeam_home_name()
    {
        return $this->team_home_name;
    }

    /**
     * Set team_away_name
     *
     * @param string $teamAwayName
     * @return Match
     */
    public function setTeam_away_name($teamAwayName)
    {
        $this->team_away_name = $teamAwayName;
    
        return $this;
    }

    /**
     * Get team_away_name
     *
     * @return string 
     */
    public function getTeam_away_name()
    {
        return $this->team_away_name;
    }
}
