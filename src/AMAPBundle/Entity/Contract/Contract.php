<?php

namespace AMAPBundle\Entity\Contract;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 *
 * @ORM\Table(name="contract")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Contract\ContractRepository")
 */
class Contract {

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
     * @ORM\OneToMany(targetEntity="AMAPBundle\Entity\Account\User", mappedBy="contract")
     */
    private $users;

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
    public function getId() {
        return $this->id;
    }

    /**
     * Set signDate
     *
     * @param \DateTime $signDate
     *
     * @return Contract
     */
    public function setSignDate($signDate) {
        $this->signDate = $signDate;

        return $this;
    }

    /**
     * Get signDate
     *
     * @return \DateTime
     */
    public function getSignDate() {
        return $this->signDate;
    }

    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     *
     * @return Contract
     */
    public function setExpirationDate($expirationDate) {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate() {
        return $this->expirationDate;
    }

    /**
     * Set repPDF
     *
     * @param string $repPDF
     *
     * @return Contract
     */
    public function setRepPDF($repPDF) {
        $this->repPDF = $repPDF;

        return $this;
    }

    /**
     * Get repPDF
     *
     * @return string
     */
    public function getRepPDF() {
        return $this->repPDF;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \AMAPBundle\Entity\Account\User $user
     *
     * @return Contract
     */
    public function addUser(\AMAPBundle\Entity\Account\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AMAPBundle\Entity\Account\User $user
     */
    public function removeUser(\AMAPBundle\Entity\Account\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
