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
    private ?Industry $industry = null;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?DateTime $deadline = null;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?DateTime $resultsDate = null;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private ?string $grantSize = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $applicationForm = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $requirements = null;

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
     * @return Industry|null
     */
    public function getIndustry() : ?Industry
    {
        return $this->industry;
    }

    /**
     * @param Industry|null $industry
     */
    public function setIndustry(?Industry $industry) : void
    {
        $this->industry = $industry;
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
     * @return DateTime|null
     */
    public function getResultsDate() : ?DateTime
    {
        return $this->resultsDate;
    }

    /**
     * @param DateTime|null $resultsDate
     */
    public function setResultsDate(?DateTime $resultsDate) : void
    {
        $this->resultsDate = $resultsDate;
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
    public function getApplicationForm() : ?string
    {
        return $this->applicationForm;
    }

    /**
     * @param string|null $applicationForm
     */
    public function setApplicationForm(?string $applicationForm) : void
    {
        $this->applicationForm = $applicationForm;
    }

    /**
     * @return string|null
     */
    public function getRequirements() : ?string
    {
        return $this->requirements;
    }

    /**
     * @param string|null $requirements
     */
    public function setRequirements(?string $requirements) : void
    {
        $this->requirements = $requirements;
    }
}