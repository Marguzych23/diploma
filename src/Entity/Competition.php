<?php


namespace App\Entity;


use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompetitionRepository")
 */
class Competition
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
    private ?string $name = null;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Industry", inversedBy="competitions")
     * @ORM\JoinTable(name="competitions_industries")
     */
    private $industries = null;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?DateTime $deadline = null;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private ?string $grantSize = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $url = null;

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
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getIndustries()
    {
        return $this->industries;
    }

    /**
     * @param null $industries
     */
    public function setIndustries($industries) : void
    {
        $this->industries = $industries;
    }

    /**
     * @return DateTime|null
     */
    public function getDeadline() : ?DateTime
    {
        return $this->deadline;
    }

    /**
     * @param DateTime|null $deadline
     */
    public function setDeadline(?DateTime $deadline) : void
    {
        $this->deadline = $deadline;
    }

    /**
     * @return string|null
     */
    public function getGrantSize() : ?string
    {
        return $this->grantSize;
    }

    /**
     * @param string|null $grantSize
     */
    public function setGrantSize(?string $grantSize) : void
    {
        $this->grantSize = $grantSize;
    }

    /**
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
}