<?php


namespace App\Entity;


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
    private string $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Industry", inversedBy="competitions")
     */
    private Industry $industry;

    /**
     * @ORM\Column(type="datetime")
     */
    private \DateTime $deadline;

    /**
     * @ORM\Column(type="datetime")
     */
    private \DateTime $resultsDate;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private string $grantSize;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $applicationForm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $requirements;

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
     * @return Industry
     */
    public function getIndustry() : Industry
    {
        return $this->industry;
    }

    /**
     * @param Industry $industry
     */
    public function setIndustry(Industry $industry) : void
    {
        $this->industry = $industry;
    }

    /**
     * @return \DateTime
     */
    public function getDeadline() : \DateTime
    {
        return $this->deadline;
    }

    /**
     * @param \DateTime $deadline
     */
    public function setDeadline(\DateTime $deadline) : void
    {
        $this->deadline = $deadline;
    }

    /**
     * @return \DateTime
     */
    public function getResultsDate() : \DateTime
    {
        return $this->resultsDate;
    }

    /**
     * @param \DateTime $resultsDate
     */
    public function setResultsDate(\DateTime $resultsDate) : void
    {
        $this->resultsDate = $resultsDate;
    }

    /**
     * @return string
     */
    public function getGrantSize() : string
    {
        return $this->grantSize;
    }

    /**
     * @param string $grantSize
     */
    public function setGrantSize(string $grantSize) : void
    {
        $this->grantSize = $grantSize;
    }

    /**
     * @return string
     */
    public function getApplicationForm() : string
    {
        return $this->applicationForm;
    }

    /**
     * @param string $applicationForm
     */
    public function setApplicationForm(string $applicationForm) : void
    {
        $this->applicationForm = $applicationForm;
    }

    /**
     * @return string
     */
    public function getRequirements() : string
    {
        return $this->requirements;
    }

    /**
     * @param string $requirements
     */
    public function setRequirements(string $requirements) : void
    {
        $this->requirements = $requirements;
    }
}