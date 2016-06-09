<?php

namespace AMAPBundle\Entity\AMAP;

use Doctrine\ORM\Mapping as ORM;

/**
 * AMAP
 *
 * @ORM\Table(name="a_m_a_p")
 * @ORM\Entity(repositoryClass="AMAPBundle\Repository\AMAP\AMAPRepository")
 */
class AMAP {

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
     * @ORM\Column(name="nameAMAP", type="string", length=255)
     */
    private $nameAMAP;

    /**
     * @var string
     *
     * @ORM\Column(name="adressAMAP", type="string", length=255)
     */
    private $adressAMAP;

    /**
     * @var int
     *
     * Nombre de membre dans l'AMAP
     */
    private $nbMembers;

    /**
     * @ORM\ManyToMany(targetEntity="AMAPBundle\Entity\Account\User", inversedBy="amap")
     * @ORM\JoinTable(name="fos_user_amap",
     *      joinColumns={@ORM\JoinColumn(name="amap_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     * )
     */
    private $users;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get nbMembers
     *
     * @return int
     */
    public function getNbMembers() {
        return count($this->users);
    }

    /**
     * Set nameAMAP
     *
     * @param string $nameAMAP
     *
     * @return AMAP
     */
    public function setNameAMAP($nameAMAP) {
        $this->nameAMAP = $nameAMAP;

        return $this;
    }

    /**
     * Get nameAMAP
     *
     * @return string
     */
    public function getNameAMAP() {
        return $this->nameAMAP;
    }

    /**
     * Set adressAMAP
     *
     * @param string $adressAMAP
     *
     * @return AMAP
     */
    public function setAdressAMAP($adressAMAP) {
        $this->adressAMAP = $adressAMAP;

        return $this;
    }

    /**
     * Get adressAMAP
     *
     * @return string
     */
    public function getAdressAMAP() {
        return $this->adressAMAP;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \AMAPBundle\Entity\Account\User $user
     *
     * @return AMAP
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

}
