<?php

namespace AMAPBundle\Entity\Contract;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 *
 * @ORM\Table(name="contract")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Contract\ContractRepository")
 */
class Contract
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="signDate", type="date")
     */
    private $signDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expirationDate", type="date")
     */
    private $expirationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="repPDF", type="text")
     */
    private $repPDF;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set signDate
     *
     * @param \DateTime $signDate
     *
     * @return Contract
     */
    public function setSignDate($signDate)
    {
        $this->signDate = $signDate;

        return $this;
    }

    /**
     * Get signDate
     *
     * @return \DateTime
     */
    public function getSignDate()
    {
        return $this->signDate;
    }

    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     *
     * @return Contract
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set repPDF
     *
     * @param string $repPDF
     *
     * @return Contract
     */
    public function setRepPDF($repPDF)
    {
        $this->repPDF = $repPDF;

        return $this;
    }

    /**
     * Get repPDF
     *
     * @return string
     */
    public function getRepPDF()
    {
        return $this->repPDF;
    }
}
