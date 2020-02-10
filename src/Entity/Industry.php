<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IndustryRepository")
 */
class Industry
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $name;

    /**
     * @var Competition[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Competition", mappedBy="industry")
     */
    private $competitions;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    /**
     * @return Competition[]|ArrayCollection
     */
    public function getCompetitions()
    {
        return $this->competitions;
    }

    /**
     * @param Competition[]|ArrayCollection $competitions
     */
    public function setCompetitions($competitions) : void
    {
        $this->competitions = $competitions;
    }
}