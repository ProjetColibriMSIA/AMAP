<?php

namespace AMAPBundle\Entity\Account;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 *
 * @ORM\Table(name="contract")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\Account\ContractRepository")
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
     * @var string
     *
     * @ORM\Column(name="rules", type="text")
     */
    private $rules;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

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
     * @var array users
     * 
     * @ORM\OneToMany(targetEntity="AMAPBundle\Entity\Account\User", mappedBy="contract_user")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity="AMAPBundle\Entity\AMAP\AMAP", inversedBy="contracts_amap")
     */
    private $amap;

    /**
     * @var string
     *
     * @ORM\Column(name="repPDF", type="text")
     */
    private $repPDF;

    public function __toString() {
        return strval($this->getId());
    }

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
    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set rules
     *
     * @param string $rules
     *
     * @return Contract
     */
    public function setRules($rules) {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get rules
     *
     * @return string
     */
    public function getRules() {
        return $this->rules;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Contract
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Add user
     *
     * @param \AMAPBundle\Entity\Account\User $user
     *
     * @return Contract
     */
    public function addUser(\AMAPBundle\Entity\Account\User $user) {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AMAPBundle\Entity\Account\User $user
     */
    public function removeUser(\AMAPBundle\Entity\Account\User $user) {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers() {
        return $this->users;
    }

    /**
     * Set amap
     *
     * @param \AMAPBundle\Entity\AMAP\AMAP $amap
     *
     * @return Contract
     */
    public function setAmap(\AMAPBundle\Entity\AMAP\AMAP $amap = null) {
        $this->amap = $amap;

        return $this;
    }

    /**
     * Get amap
     *
     * @return \AMAPBundle\Entity\AMAP\AMAP
     */
    public function getAmap() {
        return $this->amap;
    }

}
